<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\xController;
use App\Http\Controllers\yController;
use App\Http\Controllers\zController;

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

// xController
//Route::view('/xindex', 'xindex');
Route::view('/xcreate', 'xcreate');
Route::view('/xstore', 'xstore');
Route::view('/xshow', 'xshow');

// yController
//Route::view('/yindex', [yController::class, 'yindex']);
Route::view('/ycreate', [yController::class, 'ycreate']);
Route::view('/ystore', [yController::class, 'ystore']);
Route::view('/yshow', [yController::class, 'yshow']);
Route::view('/yedit', [yController::class, 'yedit']);
Route::view('/yupdate', [yController::class, 'yupdate']);
Route::view('/ydestroy', [yController::class, 'ydestroy']);

// yController
//Route::view('/zindex/{value}', [zController::class, 'zindex']);
//Route::view('/zindex', [zController::class, 'welcome']);

// 'get' view
Route::get('/hola/{id}/{user}', function ($id,$user) {
	return "Hola: ".$user." tu ID es: ".$id;
});

// vista por sección
Route::view('/xindex', [xController::class, 'xindex']);
Route::view('/zindex', [zController::class, 'vistaHija']);
Route::view('/yindex', [yController::class, 'vistaHija']);
