<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('katalog');
});

Route::middleware('auth')->group(function () {

    // Dashboard UMKM
    Route::get('/dashboard', function () {
        return view('dashboard.umkm');
    })->name('dashboard');

    // Dashboard Admin
    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin');
    })->name('admin.dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';