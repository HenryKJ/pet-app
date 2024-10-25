@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pet-é-dex</h1>

        <form method="GET" action="{{ route('pet.index') }}">
            <input type="text" name="search" class="form-control" placeholder="Search for a breed..."
                   value="{{ $query ?? '' }}">
            <button type="submit" class="btn btn-primary mt-2">Search</button>
        </form>

        <div id="breed-grid" class="row mt-4">
            @if(count($breeds) > 0)
                @foreach($breeds as $breed)
                    <div class="col-md-4">
                        <x-breed-card :breed="$breed" />
                    </div>
                @endforeach
            @else
                <div class="col">
                    <p>No breeds found.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
