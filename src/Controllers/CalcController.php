<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Controllers;

use DariusKliminskas\PhpOopExamDk\Exceptions\InputValidationException;
use DariusKliminskas\PhpOopExamDk\Framework\DIContainer;
use DariusKliminskas\PhpOopExamDk\Models\CalcAll;
use DariusKliminskas\PhpOopExamDk\Models\DataFromFile;
use DariusKliminskas\PhpOopExamDk\Models\DataToFile;
use DariusKliminskas\PhpOopExamDk\Models\DeleteEntry;
use DariusKliminskas\PhpOopExamDk\Models\Pay;
use DariusKliminskas\PhpOopExamDk\Models\ValidateData;

class CalcController
{
    public function __construct(private DIContainer $di)
    {
    }

    public function enterData()
    {
        $enterData = $this->di->get(DataToFile::class);
        $validateData = $this->di->get(ValidateData::class);
        try {
            $dataToWrite = $validateData->validate();
            $enterData->toFile($dataToWrite);
        } catch (InputValidationException $exception) {
            $exception->getMessage();
        }
        $getData = $this->di->get(DataFromFile::class);
        $data = $getData->fromFile();

        require 'view/Calculator/index.php';
    }

    public function deleteEntry(): void {
        $delete = $this->di->get(DeleteEntry::class);
        $delete->deleteEntry();
        $this->showData();
    }

    public function showData(): void
    {
        $getData = $this->di->get(DataFromFile::class);
        $data = $getData->fromFile();

        require 'view/Calculator/index.php';
    }

    public function countAll()
    {
        $count = $this->di->get(CalcAll::class);
        $sums = $count->calc();
        $getData = $this->di->get(DataFromFile::class);
        $data = $getData->fromFile();

        require 'view/Calculator/index.php';
    }

    public function finalPay()
    {
        $count = $this->di->get(CalcAll::class);
        $sums = $count->calc();
        $final = $this->di->get(Pay::class);
        if (isset($sums) && !empty($sums)) {
            try {
                $pay = $final->pay();
            } catch (InputValidationException $exception) {
                $exception->getMessage();
            }
        }

        require 'view/Calculator/index.php';
    }
}