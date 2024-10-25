<?php

namespace App\Http\Controllers;

use App\Interfaces\PetServiceInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PetController extends Controller
{
    public function __construct(protected PetServiceInterface $petService) {}

    public function index(Request $request): View
    {
        $query = null;
        if ($request->has('search')) {
            $query = $request->input('search');
        }

        $breeds = $this->petService->getAllBreeds($query);

        return view('pet.index', compact('breeds', 'query'));
    }

    public function show($id): View
    {
        $breed = $this->petService->getBreedById($id);
        $imageUrl = $this->petService->getImageByBreedId($id);

        return view('pet.show', compact('breed', 'imageUrl'));
    }
}
