<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PartnersController;



  //partners dashboard
  Route::prefix('dashboard')->group(function () {
    Route::get('/partners', [PartnersController::class, 'index'])->name('admin.partners.index');
    Route::get('/partners/create', [PartnersController::class, 'create'])->name('admin.partners.create');
    Route::post('/partners/store', [PartnersController::class, 'store'])->name('admin.partners.store');
    Route::get('/partners/{id}/edit', [PartnersController::class, 'edit'])->name('admin.partners.edit');
    Route::patch('/partners/update/{id}', [PartnersController::class, 'update'])->name('admin.partners.update');
    Route::delete('/partners/destroy/{id}', [PartnersController::class, 'destroy'])->name('admin.partners.destroy');


 });

