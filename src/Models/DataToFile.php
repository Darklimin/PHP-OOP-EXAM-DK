<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Models;

class DataToFile
{
    public function toFile(): void
    {
        $data = file_get_contents('./data.json');
        $myAllMetaData = json_decode($data, true);
        if (isset($_POST['data']) && strlen($_POST['data']) > 0) {
            $myAllMetaData[] = [
                'data' => $_POST['data'],
            ];
        }
        $serializedData = json_encode($myAllMetaData, JSON_PRETTY_PRINT);
        file_put_contents('./data.json', $serializedData);
    }
}
