<?php

use Illuminate\Support\Facades\Route;

Route::get('teste', function () {
    return view('teste');
});

Route::get('voltar', function () {
    return view("inicio");
});

Route::get('/', function () {
    return view("Inicio");
});