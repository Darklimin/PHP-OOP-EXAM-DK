<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Interfaces;

interface DataFromFileInterface
{
    public function fromFile(): array;
}