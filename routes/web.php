<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo', function($name = 'hamza'){
//     echo $name;
// });

Route::get('/user', [UserController::class, 'index']);