<?php

use App\Http\Controllers\newcontroller;
use App\Http\Controllers\egcontroller;
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

Route::get('/index', [egcontroller::class, 'index']);

Route::get('/inicio', [newcontroller::class, 'inicio']);
Route::get('/creae', [newcontroller::class, 'crear']);
Route::get('/mostrar', [newcontroller::class, 'mostrar']);

?>