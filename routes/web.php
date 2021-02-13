<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DatatableController::class, 'getDatatable'] )->name('datatables.data');
Route::get('/dashboard-example', [App\Http\Controllers\DatatableController::class, 'getDtLikeExcel'] )->name('datatablesLikeExcel.data');
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');
