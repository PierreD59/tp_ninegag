<?php

namespace App\Controller;

use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Aware\RequestAware;
use App\Aware\RequestAwareTrait;
use App\Aware\TwigAware;
use App\Aware\TwigAwareTrait;
use Symfony\Component\HttpFoundation\Response;

class ListMemeController implements PdoAware, RequestAware, TwigAware
{
    use PdoAwareTrait;
    use RequestAwareTrait;
    use TwigAwareTrait;

    public function listmeme() {
        return new Response('<p>You are in the <strong>contact</strong> !</p>');
    }
}
