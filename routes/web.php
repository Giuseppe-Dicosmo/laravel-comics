<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    //! (temporaneamente)
    // per non inserire il nostro array dentro ah "Route" cerchiamo la cartella config e creiamo un file chiamato comics dove inseriamo il nostro array
    // lo andiamo a richiamare
    $comics = config('comics');

    return view('home', [
        "comics" => $comics
    ]);
});


Route::get('/articolo/{id}', function ($id) {

    $comics = config('comics');


    // con isset controlliamo se c'è il valore $id Nel caso $id c'è Allora mostrerà la pagina
    // In caso contrario se $id e piu alto Ci mostra una pagina di errore Inserendo abort(404)


    //* if (isset($comics[$id])) {
    //*     return view('web-pages.articolo', [
    //*         "comics" => $comics
    //*     ]);
    //* } else {
    //*     abort(404);
    //* }

    // versione abbreviata
    abort_unless(isset($comics[$id]), 403);

    return view('web-pages.articolo', [
        "comics" => $comics
    ]);

    // Possiamo specificare che questo parametro deve rispettare solo un valore numerico
    // https://laravel.com/docs/7.x/routing#route-parameters
})->where('id', '[0-9]+');
