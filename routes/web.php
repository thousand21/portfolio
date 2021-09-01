<?php

use App\Http\Controllers\BackOffice;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/* Route::get('/', function (){
    return view('pages.portfolio');
}); */
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/portfolio/change', [HomeController::class, 'store']);

Route::get('/backoffice', [BackOffice::class, 'index'])->name('backoffice');