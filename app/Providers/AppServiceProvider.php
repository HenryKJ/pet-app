<?php

namespace App\Providers;

use App\Interfaces\PetServiceInterface;
use App\Services\DogService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(PetServiceInterface::class, DogService::class);
    }

    public function boot(): void
    {
        //
    }
}
