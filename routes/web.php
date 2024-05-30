<?php
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index'); //ROTTA DELL'INDEX CON TUTTI I COMICS
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');//ROTTA PER LA CREAZIONE DI UN NUOVO COMIC
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comic.show'); //ROTTA DEL SINGOLO COMIC
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');//ROTTA PER INVIARE I DATI DI UN SINGOLO COMIC