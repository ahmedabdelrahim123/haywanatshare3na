<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OurhomeController;
use App\Http\Controllers\OurloginController;
use App\Http\Controllers\OursearchController;
use App\Http\Controllers\OurregisterController;

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
     return view('our.ourwelcome');
 });

 Route::get('/ourlearnmorewhyadopt', function () {
    return view('our.ourlearnmorewhyadopt');
})->name('ourlearnmorewhyadopt');

 Route::get('/ourhome', [OurhomeController::class, 'index'])
 ->name('ourhome');

 Route::get('/oursearch', [OursearchController::class, 'index'])
 ->name('oursearch');

 Route::get('/ourregister', [OurregisterController::class, 'index'])
 ->name('ourregister');
 Route::post('/ourregister', [OurregisterController::class, 'store']);

 Route::get('/ourlogin', [OurloginController::class, 'index']
 )->name('ourlogin');
 Route::post('/ourlogin', [OurloginController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
