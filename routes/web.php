<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActionController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\Controller;
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
/*
//This ****** Lines **** Noted **** for ****Lina

   Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/inscription',function(){return view("inscription");}); this page no need use laravel registration form
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
http://127.0.0.1:8000/register  This is for doing a registration
http://127.0.0.1:8000/login  This is for doing a login
http://127.0.0.1:8000/contact  This is for sending email with captcha

|This ****** Lines **** Noted **** for ****Lina
*/


Route::get('/', function () {
    return view('welcome');
});


require __DIR__.'/auth.php';


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin',function(){return view("dashboardAdmin2022");})->middleware('admin');


// /contact is use for the sending email with captcha
Route::get('/contact',[Controller::class,"contactForm"]);
Route::post('/contact',[Controller::class,"envoyerEmail"]);
Route::get('/histoire',[Controller::class,"histoire"]);
Route::get('/accueil',[Controller::class,"accueil"]);

Route::get('refreshcaptcha',[Controller::class, 'refreshCaptcha'])->name('refreshcaptcha');

Route::get('/', function () {
    return view('welcomeEmmaus');
});
Route::get('/histoire', function () {
    return view('histoire');
});
Route::get('/autoecole', function () {
    return view('autoecole');
});
Route::get('/nosPartenaires', function () {
    return view('nosPartenaires');
});
Route::get('/equipe', function () {
    return view('equipe');
});
Route::get('/nosAction', function () {
    return view('nosAction');
});
// Route for roles
Route::get('roles', [RoleController::class, 'index'])->name('role.all');
Route::post('roles', [RoleController::class, 'store'])->name('role.store');
Route::get('roles/create', [RoleController::class, 'create'])->name('role.create');
Route::get('roles/{id}', [RoleController::class, 'show'])->name('role.show');
Route::get('roles/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::put('roles/{id}', [RoleController::class, 'update'])->name('role.update');
Route::delete('roles/{id}', [RoleController::class, 'destroy'])->name('role.delete');

// Route for users
Route::get('users', [UserController::class, 'index'])->name('user.all');
Route::get('users/{id}', [UserController::class, 'show'])->name('user.show');
Route::post('users', [UserController::class, 'store'])->name('user.add');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.delete');

// Route for Rapport
Route::get('rapports', [RapportController::class, 'index'])->name('rapport.all');
Route::get('rapports/create', [RapportController::class, 'create'])->name('rapport.create');
Route::post('rapports', [RapportController::class, 'store'])->name('rapport.store');
Route::get('rapports/{id}', [RapportController::class, 'show'])->name('rapport.show');
Route::get('rapports/{id}/edit', [RapportController::class, 'edit'])->name('rapport.edit');
Route::put('rapports/{id}', [RapportController::class, 'update'])->name('rapport.update');
Route::delete('rapports/{id}', [RapportController::class, 'destroy'])->name('rapport.delete');


// Route for Activites
Route::get('activites', [ActivityController::class, 'index'])->name('activity.all');
Route::post('activites', [ActivityController::class, 'store'])->name('activity.store');
Route::get('activites/create', [ActivityController::class, 'create'])->name('activity.create');
Route::get('activites/{id}', [ActivityController::class, 'show'])->name('activity.show');
Route::get('activites/{id}/edit', [ActivityController::class, 'edit'])->name('activity.edit');
Route::put('activites/{id}', [ActivityController::class, 'update'])->name('activity.update');
Route::delete('activites/{id}', [ActivityController::class, 'destroy'])->name('activity.delete');


// // Route for Actions
Route::get('actions', [ActionController::class, 'index'])->name('action.all');
Route::post('actions', [ActionController::class, 'store'])->name('action.store');
Route::get('actions/create', [ActionController::class, 'create'])->name('action.create');
Route::get('actions/{id}', [ActionController::class, 'show'])->name('action.show');
Route::get('actions/{id}/edit', [ActionController::class, 'edit'])->name('action.edit');
Route::put('actions/{id}', [ActionController::class, 'update'])->name('action.update');
Route::delete('actions/{id}', [ActionController::class, 'destroy'])->name('action.delete');

// Route for Ville
Route::get('villes', [VilleController::class, 'index'])->name('ville.all');
Route::get('villes/create', [VilleController::class, 'create'])->name('ville.create');
Route::post('villes', [VilleController::class, 'store'])->name('ville.store');
Route::get('villes/{id}', [VilleController::class, 'show'])->name('ville.show');
Route::get('/villes/{id}/edit', [VilleController::class, 'edit'])->name('ville.edit');
Route::put('villes/{id}', [VilleController::class, 'update'])->name('ville.update');
Route::delete('villes/{id}', [VilleController::class, 'destroy'])->name('ville.delete');


// Route for Partenaire
Route::get('partenaires', [PartenaireController::class, 'index'])->name('partenaire.all');
Route::get('partenaires/create', [PartenaireController::class, 'create'])->name('partenaire.create');
Route::post('partenaires', [PartenaireController::class, 'store'])->name('partenaire.store');
Route::get('partenaires/{id}', [PartenaireController::class, 'show'])->name('partenaire.show');
Route::get('/partenaires/{id}/edit', [PartenaireController::class, 'edit'])->name('partenaire.edit');
Route::put('partenaires/{id}', [PartenaireController::class, 'update'])->name('partenaire.update');
Route::delete('partenaires/{id}', [PartenaireController::class, 'destroy'])->name('partenaire.delete');


// Route::middleware('Admin')->group(function(){
// just put here those files will be used by admin/superAdmin
// });
