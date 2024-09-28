<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\CentersController;


    Route::get('/', [PagesController::class, 'index'])->name('pages.index');
    Route::get('/Afcic-partners', [PagesController::class, 'ourPartners'])->name('partners');
    Route::get('/careers', [PagesController::class, 'careers'])->name('pages.careers');
    Route::get('/About-Us', [PagesController::class, 'aboutAfcic'])->name('pages.about');
    Route::get('/info/Contact', [PagesController::class, 'contactPage'])->name('contact');
    Route::post('/afcic/Contact', [PagesController::class, 'sendContactInfo'])->name('contact.send');
    Route::get('/Our-Team', [PagesController::class, 'teamAfcic'])->name('pages.team');
    Route::get('/Our-Team/{id}/show', [PagesController::class, 'teamDetails'])->name('team.show');
    Route::get('/afcic/blog', [PagesController::class, 'blog'])->name('blog');
    Route::get('/Afcic/blogDetails/{id}/show', [PagesController::class, 'showblog'])->name('blog.show');
    Route::get('/info/volunteer', [PagesController::class, 'volunteerToday'])->name('volunteer');
    Route::post('/info/volunteer/details', [PagesController::class, 'volunteerDetails'])->name('volunteer.details');

    //centers
    Route::get('/centers/Working-children', [CentersController::class, 'workingChildren'])->name('centers.wcc');
    Route::get('/centers/temporary-rescue', [CentersController::class, 'temporaryRescue'])->name('centers.trc');
    Route::get('/centers/school-feeding', [CentersController::class, 'schoolFeeding'])->name('centers.sfp');
