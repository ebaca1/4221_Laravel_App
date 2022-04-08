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

Route::get('4221_Test', function () {
    return view('4221_Test');
});

Route::get("badForm", function() {
    return view("badForm");
});

Route::post('/badForm/login', [loginController::class, 'badLogin']);
