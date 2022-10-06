<?php

declare(strict_types=1);

namespace DariusKliminskas\PhpOopExamDk\Framework;

use DariusKliminskas\PhpOopExamDk\Controllers\CalcController;

class Router
{
    public function __construct(private DIContainer $di)
    {
    }

    public function process(string $method): void
    {
        $controller = $this->di->get(CalcController::class);
        if ($method == 'POST') {
            if (isset($_POST['data'])) {
                $controller->enterData();
            }
        } elseif ($method == 'DELETE') {
            $controller->deleteEntry();
        } elseif ($method == 'COUNT') {
            $controller->countAll();
        }
        else {
            $controller->showData();
        }
    }
}