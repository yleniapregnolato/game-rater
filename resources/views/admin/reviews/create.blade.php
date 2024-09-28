@extends('layouts.admin')

@section('content')
    <h1>Inserisci una nuova recensione:</h1>

    @include('partials.errors')
    <form action="{{ route('admin.reviews.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- form inserimento nuova recensione --}}
        <div class="mb-3 mt-3">
            <label for="review-title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="review-title" placeholder="titolo" name="title" required>
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

        <div>
            <div>
                <label>Voto:</label>
                <div class="stars" id="rating">
                    <span class="star" data-value="1">★</span>
                    <span class="star" data-value="2">★</span>
                    <span class="star" data-value="3">★</span>
                    <span class="star" data-value="4">★</span>
                    <span class="star" data-value="5">★</span>
                </div>
                <input type="hidden" name="rating" id="ratingValue" required> <!-- Campo nascosto per il valore -->
            </div>
        </div>

        <div class="mb-3">
            <label for="review" class="form-label">Recensione:</label>
            <textarea class="form-control" name="review" id="review" rows="3" required></textarea>
        </div>
        {{-- /form inserimento nuova recensione --}}

        {{-- salvataggio recensione --}}
        <button class="btn btn-success" type="submit">Salva</button>
        {{-- /salvataggio recensione --}}
    </form>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const stars = document.querySelectorAll('.star');
        const ratingValue = document.getElementById('ratingValue');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const value = this.getAttribute('data-value');

                // Rimuovi la classe 'selected' da tutte le stelle
                stars.forEach(s => s.classList.remove('selected'));

                // Aggiungi la classe 'selected' fino alla stella cliccata
                for (let i = 0; i < value; i++) {
                    stars[i].classList.add('selected');
                }

                // Imposta il valore nel campo nascosto
                ratingValue.value = value;
            });
        });
    });
</script>
