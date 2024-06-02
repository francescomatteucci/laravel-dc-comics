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

        public function store(Request $request){
            $form_data = $request->all(); // RECUPERIAMO I DATI DEL FORM
            
            // $new_comic = new Comic(); //CREIAMO UN ISTANZA DOVE SALVARE I DATI RECUPERATI

            // //POPOLIAMO L'ISTANZA CON I DATI DEL FORM CON $form_data
            // $new_comic->title = $form_data['title'];
            // $new_comic->description = $form_data['description'];
            // $new_comic->thumb = $form_data['thumb'];
            // $new_comic->price = $form_data['price'];
            // $new_comic->series = $form_data['series'];
            // $new_comic->sale_date = $form_data['sale_date'];
            // $new_comic->type = $form_data['type'];

            // //SALVIAMO L'ISTANZA
            //  $new_comic->save();

            $new_comic = Comic::create($form_data); //METODO COMPATTO PER CREARE L'ISTANZA CON I DATI E SALVARLI NEL DB
            return redirect()->route('comic.show', $new_comic); //REDIRECT ALLA ROTTA SHOW DI COMIC
        
        }

        public function edit(Comic $comic) {
            return view('layouts.edit', compact('comic'));
        }

        public function update(Request $request, Comic $comic){
            $form_data = $request->all();
            $comic->update($form_data); //POPOLIAMO IL DB E LO SALVIAMO
            return redirect()->route('comic.show', $comic);
        }
        
        public function destroy(Comic $comic){
            $comic->delete();
            return redirect()->route('comics.index');
        }
}
