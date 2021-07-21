@extends('layouts.main')

@section('content')
<div class="container-60">
    <h2>Aggiungi il prodotto</h2>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title">
            </div>
            <div class="form-group">
                <label for="thumb">URL copertina</label>
                <input type="text" class="form-control" id="thumb" placeholder="Inserisci l'url della copertina" name="thumb">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo del prodotto" name="price">
            </div>
            <div class="form-group">
                <label for="series">Serie prodotto</label>
                <input type="text" class="form-control" id="series" placeholder="Inserisci la serie" name="series">
            </div>
            <div class="form-group">
                <label for="sale_date">Data messa in commercio</label>
                <input type="text" class="form-control" id="sale_date" placeholder="Inserisci la data di messa in vendita" name="sale_date">
            </div>
            <div class="form-group">
                <label for="type">Tipo prodotto</label>
                <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo di prodotto" name="type">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" id="description" placeholder="Inserisci la trama" name="description">
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>
    @endsection