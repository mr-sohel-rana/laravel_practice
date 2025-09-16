<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test',function(){
    return ("this is test");
});
Route::post('/post',function(){
    return response()->json('this is test for post api');
});

 Route::get('/home/{id}/house/{number}', function($id, $number) {
    return response()->json([
        "id" => $id,
        "number" => $number
    ]);
})->where('id', '[0-2]');

Route::get('/home',function(){
    return view('welcome');
});

Route::get('/aboutffffffffff',function(){
    return view('about');
})->name('about');

Route::redirect('/about','/home');

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
       return ('users group routes');
    });
    Route::get('/user', function () {
       return ('user group routes');
    });
});
Route::fallback(function () {
     return ('no found');
});


