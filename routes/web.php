<?php

use App\Http\Controllers\StockController;
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


Route::get('/',[StockController::class,'index'])->name('index'); //! index page
Route::get('/create',[StockController::class,'create_view'])->name('Create'); //! craete page
Route::get('/edit',[StockController::class,'edit_view'])->name('Edit'); //! edit page
Route::get('/show',[StockController::class,'data_view'])->name('Show'); //! show page

Route::delete('/bye',[StockController::class,'destroy'])->name('Bye'); //! delete page



