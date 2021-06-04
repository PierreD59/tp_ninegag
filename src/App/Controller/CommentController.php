<?php

namespace App\Controller;

use App\Aware\MemeRepositoryAware;
use App\Aware\MemeRepositoryAwareTrait;
use App\Aware\PdoAware;
use App\Aware\PdoAwareTrait;
use App\Aware\RequestAware;
use App\Aware\RequestAwareTrait;
use App\Aware\TwigAware;
use App\Aware\TwigAwareTrait;
use Symfony\Component\HttpFoundation\Response;

class CommentController implements PdoAware, RequestAware, TwigAware, MemeRepositoryAware
{
    use PdoAwareTrait;
    use RequestAwareTrait;
    use TwigAwareTrait;
    use MemeRepositoryAwareTrait;


}
