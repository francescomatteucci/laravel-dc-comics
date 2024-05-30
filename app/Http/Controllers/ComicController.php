<?php

namespace App\Http\Controllers;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //ROTTA PRINCIPALE DOVE PRENDI TUTTO IL DATABASE
    public function index(){
        $comics = Comic::all();

        return view('layouts.comics', compact('comics'));
    }

    //ROTTA PER PRENDERE IL SINGOLO COMIC
    public function show(Comic $comic){
            return view('layouts.comic', compact('comic'));
    }

    //ROTTA PER CREARE IL SINGOLO COMIC

        public function create(){
            return view('layouts.create');
        }

    //ROTTA PER INVIARE I DATI DEL SINGOLO COMIC CREATO

        public function store(){
            dump('Metodo store');
        }
}