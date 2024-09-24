@extends('layouts.admin')

@section('content')
    <h1>Le tue recensioni:</h1>
    <a class="btn btn-primary" href="{{ route('admin.reviews.create')}}">Inserisci una nuova recensione</a>
@endsection
