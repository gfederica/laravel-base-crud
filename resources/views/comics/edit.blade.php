@extends('layouts.main')

@section('content')
<div class="container-60">
    <h2>Modifica il prodotto: {{$comic->title}}</h2>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" value="{{ $comic->title }}">
            </div>
            <div class="form-group">
                <label for="thumb">URL copertina</label>
                <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url della copertina" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del prodotto" name="price" value="{{ $comic->price }}">
            </div>
            <div class="form-group">
                <label for="series">Serie prodotto</label>
                <input type="text" class="form-control" id="series" placeholder="Inserisci la serie" name="series" value="{{ $comic->series }}">
            </div>
            <div class="form-group">
                <label for="sale_date">Data messa in commercio</label>
                <input type="text" class="form-control" id="sale_date" placeholder="Formato data YYYY-MM-DD" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="form-group">
                <label for="type">Tipo prodotto</label>
                <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo di prodotto" name="type " value="{{ $comic->type }}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" placeholder="Inserisci la trama" name="description" value="{{ $comic->description }}">
            </div>
            <button type="submit">Edit</button>
        </form>
    </div>
    @endsection