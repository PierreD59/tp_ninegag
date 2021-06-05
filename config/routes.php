<?php

use App\Controller\MemeController;

$routes = [
    '/' => [MemeController::class, 'home'],
    '/liste-des-meme' => [MemeController::class, 'listmeme'],
    '/partager-un-meme' => [MemeController::class, 'new'],
    '/page-detail' => [MemeController::class, 'memeDetail'],

];

return $routes;
