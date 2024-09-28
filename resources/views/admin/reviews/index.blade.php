@extends('layouts.admin')

@section('content')
    <h1>Le tue recensioni:</h1>
    {{-- nuova recensione --}}
    <a class="btn btn-primary mb-3" href="{{ route('admin.reviews.create') }}">Inserisci una nuova recensione</a>
    {{-- /nuova recensione --}}

    <div class="d-flex gap-3">
        {{-- recensioni caricate --}}
        @foreach ($reviews as $review)
            <div class="card mt-3" style="width: 18rem;">
                <img src="{{ $review->game->image ? asset($review->game->image) : asset('default-image.jpg') }}" class="card-img-top" alt="Immagine di {{ $review->game->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $review->title }}</h5>
                    <p class="card-text">{{ $review->review }}</p>
                    <a href="#" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        @endforeach
    </div>


    {{-- /recensioni caricate --}}
@endsection
