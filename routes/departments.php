<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepartmentController;



//departments dashboard
Route::prefix('dashboard')->group(function () {

    Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/departments/store', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/departments{id}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::patch('/departments/update/{id}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('/departments/destroy/{id}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
});
