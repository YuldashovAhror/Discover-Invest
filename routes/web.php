<?php

use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\ResumeController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\VacansyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/// Dashboard \\\\

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/admin/project', [ProjectController::class, "index"])->name('dashboard.project');
Route::get('/admin/project/create', [ProjectController::class, "create"])->name('dashboard.project.create');
Route::post('/admin/project/store', [ProjectController::class, 'store'])->name('dashboard.project.store');
Route::get('/admin/project/edit/{id}', [ProjectController::class, 'edit'])->name('dashboard.project.edit');
Route::put('/admin/project/{id}', [ProjectController::class, "update"])->name('dashboard.project.update');
Route::delete('/admin/project/{id}', [ProjectController::class, 'destroy'])->name('dashboard.project.destroy');

//// Team \\\\\

Route::get('/admin/team', [TeamController::class, "index"])->name('dashboard.team');
Route::get('/admin/team/create', [TeamController::class, "create"])->name('dashboard.team.create');
Route::post('/admin/team/store', [TeamController::class, 'store'])->name('dashboard.team.store');
Route::get('/admin/team/edit/{id}', [TeamController::class, 'edit'])->name('dashboard.team.edit');
Route::put('/admin/team/{id}', [TeamController::class, "update"])->name('dashboard.team.update');
Route::delete('/admin/team/{id}', [TeamController::class, 'destroy'])->name('dashboard.team.destroy');

///// News \\\\

Route::get('/admin/news', [NewsController::class, "index"])->name('dashboard.news');
Route::get('/admin/news/create', [NewsController::class, "create"])->name('dashboard.news.create');
Route::post('/admin/news/store', [NewsController::class, 'store'])->name('dashboard.news.store');
Route::get('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('dashboard.news.edit');
Route::put('/admin/news/{id}', [NewsController::class, "update"])->name('dashboard.news.update');
Route::delete('/admin/news/{id}', [NewsController::class, 'destroy'])->name('dashboard.news.destroy');

//// Vacancy \\\\

Route::get('/admin/vacancy', [VacansyController::class, "index"])->name('dashboard.vacancy');
Route::get('/admin/vacancy/create', [VacansyController::class, "create"])->name('dashboard.vacancy.create');
Route::post('/admin/vacancy/store', [VacansyController::class, 'store'])->name('dashboard.vacancy.store');
Route::get('/admin/vacancy/edit/{id}', [VacansyController::class, 'edit'])->name('dashboard.vacancy.edit');
Route::put('/admin/vacancy/{id}', [VacansyController::class, "update"])->name('dashboard.vacancy.update');
Route::delete('/admin/vacancy/{id}', [VacansyController::class, 'destroy'])->name('dashboard.vacancy.destroy');

///// Resume \\\\\

Route::get('/admin/resume', [ResumeController::class, "index"])->name('dashboard.resume');
Route::post('/admin/resume/store', [ResumeController::class, 'store'])->name('dashboard.resume.store');
Route::delete('/admin/resume/{id}', [ResumeController::class, 'destroy'])->name('dashboard.resume.destroy');

///// Contacts \\\\\

Route::get('/admin/contact', [ContactController::class, "index"])->name('dashboard.contact');
Route::post('/admin/contact/store', [ContactController::class, 'store'])->name('dashboard.contact.store');
Route::delete('/admin/contact/{id}', [ContactController::class, "destroy"])->name('dashboard.contact.destroy');

Route::view('projects', 'projects');
Route::view('career', 'vacancy');
Route::view('about', 'about');
Route::view('contacts', 'contact');

Route::view('blog', 'blog.data');
Route::view('blog-single', 'blog.data-single');


