<?php

use App\Controller\MemeController;

$routes = [
    '/' => [MemeController::class, 'home'],
    '/liste-des-meme' => [MemeController::class, 'listOfAllMeme'],
    '/partager-un-meme' => [MemeController::class, 'newMeme'],
    '/page-detail' => [MemeController::class, 'memeDetail'],

];

return $routes;
