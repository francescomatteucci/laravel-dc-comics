@extends('layouts.app')
@section('content')
<h1>Pagina della modifica</h1>
<form action="{{ route('comics.update', $comic) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input class="form-control" name="title" id="title" placeholder="Titolo del comic" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione comic</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrizione comic">{{ $comic->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input class="form-control" id="thumb" name="thumb" placeholder="Http/..." value="{{ $comic->thumb }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input class="form-control" id="price" name="price" placeholder="Inserisci prezzo" value="{{ $comic->price }}">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input class="form-control" id="series" name="series" placeholder="Inserisci series" value="{{ $comic->series}}">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci data di vendita" value="{{ $comic->sale_date }}">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input class="form-control" id="type" name="type" placeholder="Inserisci tipo comic.." value="{{ $comic->type }}">
    </div>
    <button class="btn btn-success">Salva</button>
</form>
@endsection