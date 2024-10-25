@extends('layouts.app')

@section('title', 'Home')

@push('style')
    <style>
        #searchInput {
            padding: 10px 22px;
            border-color: var(--primary-bg-color-dark);
            min-width: 350px;
        }

        .searchInput-icon {
            right: 22px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
@endpush

@section('content')
    <div class="container min-vh-100">
        <h3 class="typewriter mb-4">
            <span id="typewriterText">What pet are you looking for?</span>
        </h3>

        <form method="GET" action="{{ route('pet.index') }}" class="d-flex justify-content-center w-100" style="max-width: 800px;" >
            <div class="position-relative w-100">
                <input id="searchInput" class="form-control me-2 rounded-5 form-control-lg" type="search" name="search" placeholder="Search" aria-label="Search">
                <i class="ph ph-magnifying-glass position-absolute searchInput-icon"></i>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById('searchInput').focus();

            const titles = [
                "Looking for a Dog Breed?",
                "Searching for a Dog Breed?",
                "What Dog Breed Fits You?",
                "Find Your Perfect Feline Companion",
                "Explore Dog Breeds by Trait",
                "Discover Rare Dog Breeds",
                "Which Breed is Right for Your Family?",
                "Find Dog Breeds with Unique Traits",
                "Discover Dogs by Size and Temperament"
            ];

            const randomTitle = titles[Math.floor(Math.random() * titles.length)];
            document.getElementById('typewriterText').textContent = randomTitle;
        });
    </script>
@endpush
