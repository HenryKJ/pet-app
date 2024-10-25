<?php

namespace App\Interfaces;

interface ImageProviderInterface
{
    public function getImageByBreedId($id): string;
}
