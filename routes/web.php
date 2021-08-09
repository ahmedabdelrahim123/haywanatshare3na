<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OurloginController;
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
 Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
 

 Route::get('/ourregister', [OurregisterController::class, 'index'])->name('ourregister');
 Route::post('/ourregister', [OurregisterController::class, 'store']);

 Route::get('/ourlogin', [OurloginController::class, 'index'])->name('ourlogin');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
