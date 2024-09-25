@extends('layouts.admin')

@section('content')
    <h1>Inserisci una nuova recensione:</h1>

    @include('partials.errors')
    <form action="{{ route('admin.reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- form inserimento nuova recensione --}}
        <div class="mb-3 mt-3">
            <label for="review-title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="review-title" placeholder="titolo">
        </div>
        <div class="mb-3">
            <label for="game-select" class="form-label">Seleziona il gioco da recensire</label>
            <select class="form-select" id="game-select" name="game_id" aria-label="Seleziona il gioco">
                <option selected disabled>Seleziona il gioco da recensire</option>
                @foreach ($games as $game)
                    <option value="{{ $game->id }}">{{ $game->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Recensione:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        {{-- /form inserimento nuova recensione --}}

        {{-- salvataggio recensione --}}
        <button class="btn btn-success" type="submit">Salva</button>
        {{-- /salvataggio recensione --}}
    </form>
@endsection
