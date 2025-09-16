<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/data',[StudentController::class,'show']);
Route::post('/add',[StudentController::class,'store']);
Route::put('/update/{id}',[StudentController::class,'update']);
Route::get('/single/{id}',[StudentController::class,'singleStudent']);
