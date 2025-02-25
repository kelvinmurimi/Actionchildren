<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\CentersController;
use App\Http\Controllers\FocusAreasController;
use App\Http\Controllers\ProjectController;


//static pages 
Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::get('/About-Us', [PagesController::class, 'aboutAfcic'])->name('pages.about');
//partners
Route::get('/Afcic-partners', [PagesController::class, 'ourPartners'])->name('partners');
Route::post('/info/partners/data', [PagesController::class, 'partnerdata'])->name('partner.data');
//careers
Route::get('/careers', [PagesController::class, 'careers'])->name('pages.careers');
Route::get('/careers/{id}/details', [PagesController::class, 'careersDetails'])->name('careers.show');

//contact
Route::get('/info/Contact', [PagesController::class, 'contactPage'])->name('contact');
Route::post('/afcic/Contact', [PagesController::class, 'sendContactInfo'])->name('contact.send');
//team
Route::get('/Our-Team', [PagesController::class, 'teamAfcic'])->name('pages.team');
Route::get('/Our-Team/{id}/show', [PagesController::class, 'teamDetails'])->name('team.show');
Route::get('/filter/department/{id}', [PagesController::class, 'departmentDetails'])->name('frontend.departments.index');

//blog
//Route::get('/afcic/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/Afcic/blogDetails/{id}/show', [PagesController::class, 'showblog'])->name('blog.show');
// volunteer
Route::get('/info/volunteer', [PagesController::class, 'volunteerToday'])->name('volunteer');
Route::post('/info/volunteer/details', [PagesController::class, 'volunteerDetails'])->name('volunteer.details');

//centers
Route::get('/centers/Working-children', [CentersController::class, 'workingChildren'])->name('centers.wcc');
Route::get('/centers/temporary-rescue', [CentersController::class, 'temporaryRescue'])->name('centers.trc');
Route::get('/centers/school-feeding', [CentersController::class, 'schoolFeeding'])->name('centers.sfp');

//focus areas
Route::get('/Afcic/Focus-areas', [FocusAreasController::class, 'focusAreas'])->name('focusareas');
Route::get('/Afcic/economic-empowerment', [FocusAreasController::class, 'economic'])->name('focus.economic');
Route::get('/Afcic/rehabilitation', [FocusAreasController::class, 'rehab'])->name('focus.rehab');
Route::get('/Afcic/education-empowerment', [FocusAreasController::class, 'education'])->name('focus.education');
Route::get('/Afcic/safe-climate', [FocusAreasController::class, 'climate'])->name('focus.climate');
Route::get('/Afcic/legal-aid-and-advocacy', [FocusAreasController::class, 'legal'])->name('focus.legal');
//donate
Route::get('/Afcic/donation/form', [PagesController::class, 'donationform'])->name('donation.form');
Route::get('/Afcic/donation', [PagesController::class, 'paypaldonation'])->name('donation');
Route::post('/Afcic/donation/data', [PagesController::class, 'donate'])->name('donation.data');

//Projects
Route::get('/Afcic/projects/info', [PagesController::class, 'projects'])->name('projects.index');
Route::get('/Afcic/projects/{slug}/details', [PagesController::class, 'projectDetail'])->name('projects.show');
//Resources
Route::get('/Afcic/resources/{id}/details', [PagesController::class, 'resourcetDetail'])->name('resourcepage.show');
