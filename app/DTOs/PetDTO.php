<?php

namespace App\DTOs;

class PetDTO
{
    public string $id;

    public string $name;

    public ?string $temperament;

    public ?string $lifeSpan;

    public ?string $imageUrl;

    public ?string $bredFor;

    public ?string $breedGroup;

    public ?string $weightImperial;

    public ?string $weightMetric;

    public ?string $heightImperial;

    public ?string $heightMetric;

    public function __construct(object $data)
    {
        $this->id = $data->id ?? '';
        $this->name = $data->name ?? '';
        $this->temperament = $data->temperament ?? null;
        $this->lifeSpan = $data->life_span ?? null;
        $this->imageUrl = $data->image?->url ?? 'default-image-url';

        $this->bredFor = $data->bred_for ?? null;
        $this->breedGroup = $data->breed_group ?? null;
        $this->weightImperial = $data->weight->imperial ?? null;
        $this->weightMetric = $data->weight->metric ?? null;
        $this->heightImperial = $data->height->imperial ?? null;
        $this->heightMetric = $data->height->metric ?? null;
    }
}
