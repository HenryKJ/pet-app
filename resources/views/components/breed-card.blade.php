<div class="card interactive-card mb-4 min-vw-33"
     onclick="window.location='{{ route('pet.show', $breed->id) }}'">
    <div class="card-body">
        <h5 class="card-title">{{ $breed->name }}</h5>
        <p>{{ $breed->temperament }}</p>
    </div>
</div>
