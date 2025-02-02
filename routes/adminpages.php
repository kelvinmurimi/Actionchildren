<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminPageController;



  //adminpages dashboard
  Route::prefix('dashboard')->group(function () {
    Route::get('/adminpages', [AdminPageController::class, 'index'])->name('admin.adminpages.index');
    Route::get('/adminpages/create', [AdminPageController::class, 'create'])->name('admin.adminpages.create');
    Route::post('/adminpages/store', [AdminPageController::class, 'store'])->name('admin.adminpages.store');
    Route::get('/adminpages/{id}/edit', [AdminPageController::class, 'edit'])->name('admin.adminpages.edit');
    Route::patch('/adminpages/update/{id}', [AdminPageController::class, 'update'])->name('admin.adminpages.update');
    Route::delete('/adminpages/destroy/{id}', [AdminPageController::class, 'destroy'])->name('admin.adminpages.destroy');


 });
