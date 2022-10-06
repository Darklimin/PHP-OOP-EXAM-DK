<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Models;

class DataToFile
{
    public function toFile(array $validatedData): void
    {
        $data = file_get_contents('./data.json');
        $myAllMetaData = json_decode($data, true);
        $myAllMetaData[] = $validatedData;
        $serializedData = json_encode($myAllMetaData, JSON_PRETTY_PRINT);
        file_put_contents('./data.json', $serializedData);
    }
}
