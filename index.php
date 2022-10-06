<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

use DariusKliminskas\PhpOopExamDk\Framework\DIContainer;
use DariusKliminskas\PhpOopExamDk\Framework\Router;

$container = new DIContainer();
$router = $container->get(Router::class);
$request = (isset($_POST['_method'])) ? strtoupper($_POST['_method']) : $_SERVER['REQUEST_METHOD'];
$router->process($request);





