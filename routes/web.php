<?php

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
    return view('index');
});

// Route::get('/boutique', function () {
//     return view('boutique');
// });

Route::get('/boutique', 'ProductController@showProductsList');

Route::get('/services', function () {
    return view('services');
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/panier/connexion', function () {
    return view('panier.connexion');
});

Route::get('/panier/panier', function () {
    return view('panier.panier');
});
