<?php

namespace App\Services;

use App\DTOs\PetDTO;
use App\Interfaces\ImageProviderInterface;
use App\Interfaces\PetServiceInterface;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class DogService implements ImageProviderInterface, PetServiceInterface
{
    protected string $apiUrl;

    protected string $apiKey;

    protected Client $client;

    public function __construct()
    {
        $this->apiUrl = config('services.dog_api.url');
        $this->apiKey = config('services.dog_api.key');

        $this->client = new Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'x-api-key' => $this->apiKey,
            ],
        ]);
    }

    public function getAllBreeds(?string $search = null): array
    {
        if ($search) {
            $response = $this->client->get('v1/breeds/search?q='.$search);
        } else {
            $response = $this->client->get('v1/breeds');
        }

        return array_map(fn ($breed) => new PetDTO($breed), json_decode($response->getBody()->getContents()));
    }

    public function getBreedById($id): ?PetDTO
    {
        $response = $this->client->get("v1/breeds/{$id}");

        $breed = json_decode($response->getBody()->getContents());

        return $breed ? new PetDTO($breed) : null;
    }

    public function getImageByBreedId($id): string
    {
        $response = Http::get("{$this->apiUrl}v1/images/search?breed_id={$id}");
        $image = json_decode($response->getBody()->getContents());

        return $image[0]->url;
    }
}
