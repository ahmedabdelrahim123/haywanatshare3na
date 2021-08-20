<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OurhomeController;
use App\Http\Controllers\OurloginController;
use App\Http\Controllers\OurlogoutController;
use App\Http\Controllers\OursearchController;
use App\Http\Controllers\OuranimalsController;
use App\Http\Controllers\OurregisterController;
use App\Http\Controllers\OuraccessoriesController;
use App\Http\Controllers\OuradminaccessoriesController;

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
     return view('our.ourhome');
 });

 Route::get('/ourlearnmorewhyadopt', function () {
    return view('our.ourlearnmorewhyadopt');
})->name('ourlearnmorewhyadopt');

 Route::get('/ouraboutus', function () {
    return view('our.ouraboutus');
})->name('ouraboutus');

 Route::get('/ourhome', [OurhomeController::class, 'index'])
 ->name('ourhome');

 Route::get('/ouradminaccessories', [OuradminaccessoriesController::class, 'index'])
 ->name('ouradminaccessories');
 Route::post('/ouradminaccessories', [OuradminaccessoriesController::class, 'store']);

 Route::get('/ouraccessories', [OuraccessoriesController::class, 'index'])
 ->name('ouraccessories');
 Route::delete('/ouraccessories/{accessory}', [OuraccessoriesController::class, 'destroy'])->name('ouraccessories.destroy');

 Route::get('/oursearch', [OursearchController::class, 'index'])->name('oursearch');
 Route::post('/oursearch', [OursearchController::class, 'search'])->name('oursearch');
 Route::delete('/oursearch/{animal}', [OursearchController::class, 'destroy'])->name('oursearch.destroy');

 Route::get('/ouranimals', [OuranimalsController::class, 'index'])
 ->name('ouranimals');
 Route::post('/ouranimals', [OuranimalsController::class, 'store']);   

 Route::get('/ourregister', [OurregisterController::class, 'index'])
 ->name('ourregister');
 Route::post('/ourregister', [OurregisterController::class, 'store']);

 Route::post('/ourlogout', [OurlogoutController::class, 'store'])->name('ourlogout');

 Route::get('/ourlogin', [OurloginController::class, 'index']
 )->name('ourlogin');
 Route::post('/ourlogin', [OurloginController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
