@extends('layouts.app')
@section('content')
<h1>Pagina del create</h1>
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input class="form-control" name="title" id="title" placeholder="Titolo del comic">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione comic</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrizione comic"></textarea>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input class="form-control" id="thumb" name="thumb" placeholder="Http/...">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input class="form-control" id="price" name="price" placeholder="Inserisci prezzo">
    </div>

    <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input class="form-control" id="series" name="series" placeholder="Inserisci series">
    </div>

    <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci data di vendita">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input class="form-control" id="type" name="type" placeholder="Inserisci tipo comic..">
    </div>
    <button class="btn btn-success">Crea</button>
</form>
@endsection
