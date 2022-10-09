<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Interfaces;

interface DataToFileInterface
{
    public function toFile(array $validatedData): void;
}