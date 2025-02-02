<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CplDiktiController;

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

Route::get('/cpldikti',[CplDIktiController::class, 'indexDikti'])->name('cpldikti');

Route::get('/tambahcpldikti',[CplDIktiController::class, 'tambahcpldikti'])->name('tambahcpldikti');
Route::post('/insertcpldikti',[CplDIktiController::class, 'insertcpldikti'])->name('insertcpldikti');

Route::get('/tampilcpldikti/{id}',[CplDIktiController::class, 'tampilcpldikti'])->name('tampilcpldikti');
Route::post('/updatecpldikti/{id}',[CplDIktiController::class, 'updatecpldikti'])->name('updatecpldikti');

Route::get('/delete/{id}',[CplDIktiController::class, 'delete'])->name('delete');