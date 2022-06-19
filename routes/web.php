<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

Route::get('/index', [TemplateController::class, 'index']);
Route::get('/escala', [TemplateController::class, 'escala']);
// Route::view('/index','index');


// Route::get('/index', function () {
//     $arr = "Bem vindo";

//     return view('index',
//     compact('arr'));

//     // return view('index')->with('arr',$arr);
// });
