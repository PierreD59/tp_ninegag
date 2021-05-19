<?php

namespace App\Controller;

use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Aware\RequestAware;
use App\Aware\RequestAwareTrait;
use App\Aware\TwigAware;
use App\Aware\TwigAwareTrait;
use Symfony\Component\HttpFoundation\Response;

class HomeController implements PdoAware, RequestAware, TwigAware
{
    use PdoAwareTrait;

    use RequestAwareTrait;
    
    use TwigAwareTrait;

    public function home() {
//        $this->pdo->prepare('SELECT .....')

        // return new Response('<p>You are in the <strong>home</strong> (' . $this->request->getUri() . ') !</p>');
        return new Response($this->twig->render('Home/home.html.twig'));
    }
}
