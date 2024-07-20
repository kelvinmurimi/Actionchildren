<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\careers\CareersController;



  //careers dashboard
  Route::prefix('dashboard')->group(function () {
    Route::get('/careers', [CareersController::class, 'index'])->name('admin.careers.index');
    Route::get('/careers/create', [CareersController::class, 'create'])->name('admin.careers.create');
    Route::post('/careers/store', [CareersController::class, 'store'])->name('admin.careers.store');
    Route::get('/careers/{id}/edit', [CareersController::class, 'edit'])->name('admin.careers.edit');
    Route::patch('/careers/update/{id}', [CareersController::class, 'update'])->name('admin.careers.update');
    Route::delete('/careers/destroy/{id}', [CareersController::class, 'destroy'])->name('admin.careers.destroy');
  

 });

