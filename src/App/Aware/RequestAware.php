<?php

namespace App\Aware;

use Symfony\Component\HttpFoundation\Request;

interface RequestAware
{
    public function setRequest(Request $request);
}
