<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

use DariusKliminskas\PhpOopExamDk\Framework\DIContainer;
use DariusKliminskas\PhpOopExamDk\Framework\Router;

$container = new DIContainer();
$router = $container->get(Router::class);
$router->process();



