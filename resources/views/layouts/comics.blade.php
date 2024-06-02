@extends('layouts.app')
@section('content')
    
<h1>Pagina dei comics</h1>
@foreach ($comics as $comic)
    
<div class="card">
    <div>{{ $comic->id }}</div>
    <a href="{{ route('comic.show', $comic) }} ">{{ $comic->title }}</a>
    <img src="{{ $comic->thumb }}" width="200" alt="">
    <div>{{ $comic->price}}</div>
    <div>{{ $comic->series }}</div>
    <button class="btn btn-success"><a href="{{ route('comics.edit', $comic) }}">Modifica</a></button>
    <form action="{{ route('comics.destroy', $comic) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger">Elimina</button>
    </form>
</div>
@endforeach
@endsection
