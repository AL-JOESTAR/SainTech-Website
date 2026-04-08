<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/',[HomeController::class, 'show']);

Route::get('/about',[AboutController::class, 'show']);

//create data contact
Route::get('/contact',[ContactController::class, 'index']);
Route::post('/contact',[ContactController::class, 'store']);

Route::get('/services', function(){
    return view('pages.services');
});

// Route::get('/contact', function(){
//     return view('pages.contact');
// });

