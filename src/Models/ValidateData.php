<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Models;

use DariusKliminskas\PhpOopExamDk\Exceptions\InputValidationException;

class ValidateData
{
    public function validate(): array
    {
        $finalData = [];
        $newData = $_POST['data'];
        $arrayData = explode(' ', $newData);

        if (isset($arrayData[0]) && is_numeric($arrayData[0])) {
            $finalData['amount'] = $arrayData[0];
        } else throw new InputValidationException
        ("Neteisingai įvesti duomenys. Patikslinkite ir bandykite dar kartą.");

        if (isset($arrayData[1]) && is_numeric($arrayData[1])) {
            $finalData['price'] = $arrayData[1];
        } else throw new InputValidationException
        ("Neteisingai įvesti duomenys. Patikslinkite ir bandykite dar kartą.");

        if (isset($arrayData[2]) && ($arrayData[2] === 'diena' || $arrayData[2] === 'naktis')) {
            $finalData['period'] = $arrayData[2];
        } else throw new InputValidationException
        ("Neteisingai įvesti duomenys. Patikslinkite ir bandykite dar kartą.");

        if (isset($arrayData[3]) && is_numeric($arrayData[3]) && $arrayData[3] < 13 && $arrayData[3] > 0) {
            $finalData['month'] = $arrayData[3];
        } else throw new InputValidationException
        ("Neteisingai įvesti duomenys. Patikslinkite ir bandykite dar kartą.");

        return $finalData;
    }
}