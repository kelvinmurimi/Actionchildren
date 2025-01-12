<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;



  //projects dashboard
  Route::prefix('dashboard')->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::patch('/projects/update/{id}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/destroy/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');


 });
