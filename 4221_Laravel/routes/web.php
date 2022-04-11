<?php

use Illuminate\Support\Facades\Route;

// Controller for login
use App\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/success', [loginController::class, 'success']);

Route::get('/goodForm', [loginController::class, 'goodForm']);

Route::get('/badForm', [loginController::class, 'badForm']);

Route::post('/goodForm/login', [loginController::class, 'goodLogin']);

Route::post('/badForm/login', [loginController::class, 'badLogin']);
