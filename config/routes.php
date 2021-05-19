<?php

use App\Controller\ContactController;
use App\Controller\HomeController;

$routes = [
    '/' => [HomeController::class, 'home'],
    '/contact' => [ContactController::class, 'contact'],
];

return $routes;
