<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaffsController;



  //staffs dashboard
  Route::prefix('dashboard')->group(function () {
    Route::get('/staffs', [StaffsController::class, 'index'])->name('admin.staffs.index');
    Route::get('/staffs/create', [StaffsController::class, 'create'])->name('admin.staffs.create');
    Route::post('/staffs/store', [StaffsController::class, 'store'])->name('admin.staffs.store');
    Route::get('/staffs/{id}/edit', [StaffsController::class, 'edit'])->name('admin.staffs.edit');
    Route::patch('/staffs/update/{id}', [StaffsController::class, 'update'])->name('admin.staffs.update');
    Route::delete('/staffs/destroy/{id}', [StaffsController::class, 'destroy'])->name('admin.staffs.destroy');


 });

