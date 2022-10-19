<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Models;

use DariusKliminskas\PhpOopExamDk\Exceptions\InputValidationException;
use DariusKliminskas\PhpOopExamDk\Framework\DIContainer;
use DariusKliminskas\PhpOopExamDk\Interfaces\PayInterface;

class Pay implements PayInterface
{
    public function __construct(private DIContainer $di)
    {
    }

    public function pay(): float
    {
        $count = $this->di->get(CalcAll::class);
        $sums = $count->calc();
        $pay = 0;
        if (sizeof($sums) > 0) {
            $sumArr = $this->di->get(CalcAll::class);
            $sums = $sumArr->calc();
            $pay = $sums['suma'];
            $dataArray = [];
            $serializedData[] = json_encode($dataArray, JSON_PRETTY_PRINT);
            file_put_contents('./data.json', $serializedData);
        } else throw new InputValidationException
        ("Prieš mokėdami turite suskaičiuoti bendrą kainą");

        return $pay;
    }
}