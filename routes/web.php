<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/',[HomeController::class, 'show']);

Route::get('/about',[AboutController::class, 'show']);

Route::get('/services', function(){
    return view('pages.services');
});