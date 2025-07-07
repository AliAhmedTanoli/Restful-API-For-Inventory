<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ItemCont;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//from website
// RestfullAPi
Route::get('/items', [ItemCont::class, 'index']);
Route::get('/items/{id}', [ItemCont::class, 'show']);
Route::post('/items', [ItemCont::class, 'store']);
Route::put('/items/{id}', [ItemCont::class, 'update']);
Route::delete('/items/{id}', [ItemCont::class, 'destroy']);