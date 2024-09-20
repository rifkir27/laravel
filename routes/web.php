<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



 
Route::get('/home', function (){
    return view ('home');
});


Route::get('/rpl', function (){
    return'ini teks';
});


Route::get('/siswa', [SiswaController::class, 'index']);
