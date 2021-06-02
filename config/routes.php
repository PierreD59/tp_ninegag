<?php

use App\Controller\ListMemeController;
use App\Controller\HomeController;

$routes = [
    '/' => [HomeController::class, 'home'],
    '/liste-des-meme' => [ListMemeController::class, 'listmeme'],
];

return $routes;
