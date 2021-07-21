@extends('layouts.main')

@section('content')

@if (session('message'))
        <div>
            {{ session('message') }}
        </div>
@endif

<div class="container">
    <h2>{{ $comics->title }}</h2>

    <div class="comic">
        <div class="img">
            <img src="{{ $comics->thumb }}" alt="{{ $comics->title}}">
        </div>
        <div class="comic-description">
            <h4>{{ $comics->title}}"</h4>
            <h5>{{ $comics->series}}</h5>
            <small>Tipo: {{ $comics->type}}</small><br>
            <small>Data di uscita: {{ $comics->sale_date}}</small>
            <p>Trama: {{ $comics->description }}</p>
            <small>Prezzo: {{ $comics->price}}</small>
        </div>
    </div>

    <div>
        <a href="{{ route("comics.index") }}">Torna all'elenco</a>
    </div>
</div>
@endsection