<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//list siswa
Route::get('/student', [StudentController::class, 'index']);
//show siwqa
Route::get('/student/{nis}', [StudentController::class, 'show']);
//create siswa
Route::post('/student', [StudentController::class, 'create']);
//u[date]
Route::put('/student/{id}', [StudentController::class, 'update']);
//delete
Route::delete('/student/{id}', [StudentController::class, 'destroy']);