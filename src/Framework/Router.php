<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Framework;

use DariusKliminskas\PhpOopExamDk\Controllers\CalcController;

class Router
{
    public function __construct(private DIContainer $di)
    {
    }

    public function process(): void
    {
        $controller = $this->di->get(CalcController::class);
        $controller->enterData();
    }
}