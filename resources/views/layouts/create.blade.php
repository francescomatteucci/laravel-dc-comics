@extends('layouts.app')
@section('content')
<h1>Pagin del create</h1>
<form action=" {{ route('comics.store') }}" method="POST">
@csrf
<div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input class="form-control" name="title" id="title" placeholder="Titolo del comic">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Descrizione comic</label>
    <textarea class="form-control" id="description" id="description" name="description" rows="3" placeholder="Descrizione comic"></textarea>
</div>

<div class="mb-3">
    <label for="image" class="form-label">Immagine</label>
    <textarea class="form-control" id="image" id="image" name="image" rows="3" placeholder="Http/..."></textarea>
</div>

<div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <textarea class="form-control" id="price" id="price" name="price" rows="1" placeholder="Inserisci prezzo"></textarea>
</div>

<button class="btn btn-success" >Crea</button>
</form>
@endsection