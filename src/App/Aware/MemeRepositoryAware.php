<?php

namespace App\Aware;

use App\Repository\MemeRepository;

interface MemeRepositoryAware
{
    public function provideProjectRepository(MemeRepository $memeRepository);
}
