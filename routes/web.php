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

Route::get('/home', function () {
    return view('home');
})->name("home");

Route::get('/prodotti', function () {

  $data = config('pasta');

  $paste = [];

  foreach ($data as $key => $prodotto) {
    // stiamo aggiungendo la chiave id ai singoli prodotti
    $prodotto["id"] = $key;
    // stiamo creando all'interno dell'array paste vari array che
    // indicano i tipi di pasta e riempiamo questi ultimi con i tipi
    // di pasta corretti
    $paste[$prodotto["tipo"]][] = $prodotto;
  }
    return view('prodotti', $data);

})->name("pasta");

Route::get('/news', function () {
    return view('news');
})->name("notizie"); // questo passaggio |->name("notizie")| ci permette di creare
                    // un alias che potremmo cambiare all'occorrenza quando decideremo
                     // un giono di cambiare nome in questo caso alle 'news' e vale anche
                     // per le altre sezioni che sono sopra


Route::get('/prodotti/show/{id}', function ($id) {

  if(config("pasta.$id") == null) {
    abort(404);
  }

  $pasta = config("pasta.$id");
   return view('prodotto-singolo', ['pasta' => $pasta, "id"=>$id]);

})->where('id', '[0-9]+')->name("prodotto-singolo");
