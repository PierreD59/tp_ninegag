<?php

namespace App\Aware;

use App\Repository\MemeRepository;

trait MemeRepositoryAwareTrait
{
    private ?MemeRepository $memeRepository = null;

    public function provideProjectRepository(MemeRepository $memeRepository) {
        $this->memeRepository = $memeRepository;
    }

}
