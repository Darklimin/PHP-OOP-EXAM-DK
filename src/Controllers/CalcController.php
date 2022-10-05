<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Controllers;

use DariusKliminskas\PhpOopExamDk\Framework\DIContainer;
use DariusKliminskas\PhpOopExamDk\Models\DataFromFile;
use DariusKliminskas\PhpOopExamDk\Models\DataToFile;

class CalcController
{
    public function __construct(private DIContainer $di)
    {
    }

    public function enterData()
    {
        $enterData = $this->di->get(DataToFile::class);
        $enterData->toFile();
        $getData = $this->di->get(DataFromFile::class);
        $data = $getData->fromFile();

        require 'view/Calculator/index.php';
    }
}