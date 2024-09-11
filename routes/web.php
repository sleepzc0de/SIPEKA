<?php

use App\Http\Controllers\PenataanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('penataan',PenataanController::class);
Route::get('get-data-penataan',[PenataanController::class,'getDataPenataan'])->name('data.penataan');
Route::get('/get-kab-kota/{provinsiId}', [PenataanController::class, 'getKabKota'])->name('get-kab-kota');




require __DIR__.'/auth.php';
