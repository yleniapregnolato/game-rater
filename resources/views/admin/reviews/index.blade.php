@extends('layouts.admin')

@section('content')
    <h1>Le tue recensioni:</h1>
    {{-- nuova recensione --}}
    <a class="btn btn-primary" href="{{ route('admin.reviews.create')}}">Inserisci una nuova recensione</a>
    {{-- /nuova recensione --}}

    {{-- recensioni caricate --}}
    <table>
        
    </table>
    {{-- /recensioni caricate --}}
@endsection
