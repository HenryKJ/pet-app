@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $breed->name }}</h1>
        <img src="{{ $imageUrl ?? 'default-image-url' }}" alt="{{ $breed->name }}" class="img-fluid breed-image mb-4">

        <ul class="list-unstyled float-left">
            @if($breed->temperament)
                <li><strong>Temperament:</strong> {{ $breed->temperament }}</li>
            @endif
            @if($breed->lifeSpan)
                <li><strong>Life Expectancy:</strong> {{ $breed->lifeSpan }}</li>
            @endif
            @if($breed->breedGroup)
                <li><strong>Breed Group:</strong> {{ $breed->breedGroup }}</li>
            @endif
            @if($breed->bredFor)
                <li><strong>Bred For:</strong> {{ $breed->bredFor }}</li>
            @endif
            @if($breed->weightImperial && $breed->weightMetric)
                <li><strong>Weight:</strong> {{ $breed->weightImperial }} lbs ({{ $breed->weightMetric }} kg)</li>
            @endif
            @if($breed->heightImperial && $breed->heightMetric)
                <li><strong>Height:</strong> {{ $breed->heightImperial }} in ({{ $breed->heightMetric }} cm)</li>
            @endif
        </ul>

        <a href="{{ route('pet.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
