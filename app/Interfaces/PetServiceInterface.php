<?php

namespace App\Interfaces;

interface PetServiceInterface
{
    public function getAllBreeds(?string $search = null): array;

    public function getBreedById($id);
}
