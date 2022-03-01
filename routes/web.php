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

/*Route::view('/home', 'home')->name('home');*/

Route::get('/rumah', function(){
    return view('home');
});

Route::get('/sambutanketuaprodi', function() {
    return view('sambutanketuaprodi');
});

Route::get('/arahkebijakan', function() {
    return view('arahkebijakan');
});

Route::get('/sejarah', function() {
    return view('/sejarah');
});

Route::get('/strukturprogramstudi', function() {
    return view('/strukturprogramstudi');
});

Route::get('/fasilitas', function() {
    return view('/fasilitas');
});

Route::get('/sertifikatbanpt', function() {
    return view('/sertifikatbanpt');
});

Route::get('/kurikulum', function() {
    return view('/kurikulum');
});

Route::get('/jadwalkuliah', function() {
    return view('/jadwalkuliah');
});

Route::get('/infografisdosen', function() {
    return view('/infografisdosen');
});

Route::get('/profiledosen', function() {
    return view('/profiledosen');
});


