<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\AdmincategoriesController;
use App\Http\Controllers\dashboard\AdminArticlesController;



  //articles dashboard
  Route::prefix('dashboard')->group(function () {
    Route::get('/articles', [AdminArticlesController::class, 'index'])->name('admin.articles.index');
    Route::get('/articles/create', [AdminArticlesController::class, 'create'])->name('admin.articles.create');
    Route::post('/articles/store', [AdminArticlesController::class, 'store'])->name('admin.articles.store');
    Route::get('/articles/{id}/edit', [AdminArticlesController::class, 'edit'])->name('admin.articles.edit');
    Route::patch('/articles/update/{id}', [AdminArticlesController::class, 'update'])->name('admin.articles.update');
    Route::delete('/articles/destroy/{id}', [AdminArticlesController::class, 'destroy'])->name('admin.articles.destroy');
   // Route::get('/articles/auther/manage', [AutherController::class, 'manageAutherArticles'])->name('admin.articles.manage');

});
//admin categories & Tags
Route::prefix('dashboardcategories')->group(function () {
    Route::resource('/categories', AdmincategoriesController::class);
});