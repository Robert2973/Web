<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('introduccion');
});

Route::get('/inicioRebels', function () {
    return view('inicioRebels');
});

Route::get('/inicioSelene', function () {
    return view('inicioSelene');
});

Route::get('/EquipoS', function () {
    return view('EquipoS');
});

Route::get('/ExperienciasS', function () {
    return view('ExperienciasS');
});
Route::get('/ConstruccionS', function () {
    return view('ConstruccionS');
});
Route::get('/Contacto', function () {
    return view('Contacto');
});
Route::get('/introduccion', function () {
    return view('introduccion');
});










