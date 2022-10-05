<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Models;

class DataFromFile
{
    public function fromFile(): array
    {
        $data = file_get_contents('./data.json');
        return json_decode($data, true);
    }
}