<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/vision-mission-buts', [PageController::class, 'vision'])->name('vision.mission.buts');
Route::get('/impact-social', [PageController::class, 'impact'])->name('impact.social');
Route::get('/financements', [PageController::class, 'financements'])->name('financements');
Route::get('/positionnement', [PageController::class, 'positionnement'])->name('positionnement');
Route::get('/approche-expertise', [PageController::class, 'approche'])->name('approche.expertise');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/create-contact', [PageController::class, 'createContact'])->name('contact.store');


Route::get('/activite-detail/{slug}', [PageController::class, 'detailActivite'])->name('active.detail');
Route::get('/renforcement-des-capacites', [PageController::class, 'renforcement'])->name('renforcement.capacite');
Route::get('/promotion-de-la-sante', [PageController::class, 'promotion'])->name('promotion');
Route::get('/plaidoyer', [PageController::class, 'plaidoyer'])->name('plaidoyer');

Route::get('/recherche', [PageController::class, 'search'])->name('search');




Route::get('/activite', [ActiviteController::class, 'active'])->name('active');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/store', [AdminController::class, 'store'])->name('store.activite');
Route::get('/liste', [AdminController::class, 'liste'])->name('admin.liste');
Route::get('/edit-activite/{id}', [AdminController::class, 'showFormEditActivite'])->name('admin.edit');
Route::post('/update-activite', [AdminController::class, 'updateActivite'])->name('admin.update');
Route::get('/delete-activite/{id}', [AdminController::class, 'supprimerActivite'])->name('admin.delete');
Route::get('/compte', [AdminController::class, 'listeCompte'])->name('admin.compte');
Route::get('/creer-compte', [AdminController::class, 'showFormUser'])->name('admin.creer');
Route::post('/create-compte', [AdminController::class, 'createCompte'])->name('admin.user');

Route::get('/edit-user/{id}', [AdminController::class, 'showFormEditUser'])->name('admin.editUser');
Route::post('/update-user', [AdminController::class, 'updateUser'])->name('admin.updateUser');
Route::get('/delete-user/{id}', [AdminController::class, 'supprimerUser'])->name('admin.deleteUser');
Route::get('/list-contact', [AdminController::class, 'listContact'])->name('liste.contact');
Route::get('/delete-contact/{id}', [AdminController::class, 'supprimerContact'])->name('admin.deleteContact');



Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');


Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');

Route::get('/add-role', [RoleController::class, 'addRole']);
Route::get('/add-user', [RoleController::class, 'addUser']);



