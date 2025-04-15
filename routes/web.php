<?php

use App\Http\Controllers\ormcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ormconsultas',[ormcontroller::class,'consultas']);
