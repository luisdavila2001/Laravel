<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CineStarController;

Route::controller(CineStarController::class)->group(function(){
    route::get("/", "Index")->name('/');
    Route::get('cines', 'cines')->name('cines');
    Route::get('cines/{id}', 'cine')->name('cine');
    Route::get('peliculas/{id}', 'peliculas')->name('peliculas');
    Route::get('pelicula/{id}', 'pelicula')->name('pelicula');
});