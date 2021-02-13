<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;


Route::prefix('admin-dashboard')->middleware('admin','auth')->group(function () {
Route::get('', [AdminDashboardController::class, 'index'])->name('admin.dash');
});
