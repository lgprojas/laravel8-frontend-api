<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/user/{id}/{nombre?}', function ($id, $nombre= 'Luis') {
//    return view('welcome');
//});

//MVC

use App\Http\Controllers\UserController;
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/newUser', [UserController::class, 'newUser']);