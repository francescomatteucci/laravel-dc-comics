@extends('layouts.app')
@section('content')

<h1>Pagina del singolo comic</h1>
<div class="card">
    <div>{{ $comic->title }}</div>
    <img src="{{ $comic->thumb }}" width="200" alt="">
    <div>{{ $comic->description}}</div>
    <div>{{ $comic->price}}</div>
    <div>{{ $comic->series }}</div>
    <div>{{ $comic->sale_date }}</div>
    <div>{{ $comic->type }}</div>
    <button class="btn btn-success"><a href="{{ route('comics.edit', $comic) }}">Modifica</a></button>
</div>
@endsection
