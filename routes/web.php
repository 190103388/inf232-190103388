<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/name', function () {
    return view('name');
});

Route::get('/faculty/{id?}', function ($id = 0) {
    return view('faculty',['id'=> $id]);
});


Route::get('/lab5/{id}',[StudentController::class, 'show'] );


