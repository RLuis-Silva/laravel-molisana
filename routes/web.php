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


// rotta HOME
Route::get('/', function () {

    // DB array prodotti è stato sostituito
    // cerca in config/sito-data.php e stampa il db
    $data = config('sito-data');

    // creo delle varaibili array 
    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach($data as $key => $card){
        
        // creo la chiave in base la posizione dei prodotti
        // perchè la chiave sarà l'id del prodotto che ci servirà
        // per vedere la descrizione dettagliata del: prodotto/{{id}}
        $card['id'] = $key;

        if($card['tipo'] == 'lunga'){
            $lunghe[] = $card;
        }else if($card['tipo'] == 'corta'){
            $corte[] = $card;
        }else if($card['tipo'] == 'cortissima'){
            $cortissime[] = $card;
        }
    }

    // dd($data);
    // return view('home', ['cards' => $data]);

    // per ottenere la stampa dei prodotti divisi: associo la chiave con l'array
    // return view('home', ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime]);
    // è uguale a scriverlo così (modo più compatto):
    return view('home', compact('corte', 'cortissime', 'lunghe'));

}) -> name('home');


// rotta news
Route::get('/news', function () {
    return view('news');
}) -> name('news');


// rotta PRODOTTI
Route::get('/prodotti/{id}', function ($id) {
    
    // stampa FEEDBACK dell' id selezionato
    // dump($id);

    // DB array prodotti è stato sostituito
    // cerca in config/sito-data.php e stampa il db
     $data = config('sito-data');


    // creo una variabile 'prodotto' che sarà associato alla variabile
    //  data[id]
    $prodotto = $data[$id];
    $lenght = count($data) -1;

    // la rotta restituisce la view 'prodotti' e passare (il dato)
    // la variabile 'prodotto'
    // return view('prodotti', ['prodotto' => $prodotto]);
    // lo riscrivo in modo più compatto, così:
    return view('prodotti', compact('prodotto', 'lenght', 'id'));
}) -> name('prodotti') ;