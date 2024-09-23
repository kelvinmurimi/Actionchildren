<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\PagesController;



    Route::get('/', [PagesController::class, 'index'])->name('pages.index');
    Route::get('/careers', [PagesController::class, 'careers'])->name('pages.careers');
    Route::get('/About-Us', [PagesController::class, 'aboutAfcic'])->name('pages.about');
    Route::get('/Our-Team', [PagesController::class, 'teamAfcic'])->name('pages.team');
    Route::get('/Our-Team/{id}/show', [PagesController::class, 'teamDetails'])->name('team.show');


