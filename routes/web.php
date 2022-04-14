<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StructureController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('welcomeEmmaus');
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
// Route::get('users', [UserController::class, 'index'])->name('user.all');
// Route::get('users/{id}', [UserController::class, 'show'])->name('user.show');
// Route::post('users', [UserController::class, 'store'])->name('user.add');
// Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
// Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
// Route::put('users/{id}', [UserController::class, 'update'])->name('user.update');
// Route::delete('users/{id}', [UserController::class, 'destroy'])->name('user.delete');

// Route for Rapport
Route::get('rapports', [RapportController::class, 'index'])->name('rapport.all');
Route::get('rapports/{id}', [RapportController::class, 'show'])->name('rapport.show');
Route::post('rapports', [RapportController::class, 'store'])->name('rapport.add');
Route::get('/rapports/create', [RapportController::class, 'create'])->name('rapport.create');
Route::get('/rapports/{id}/edit', [RapportController::class, 'edit'])->name('rapport.edit');
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
Route::get('actions/{id}', [ActionController::class, 'show'])->name('action.show');
Route::post('actions', [ActionController::class, 'store'])->name('action.add');
Route::get('/actions/create', [ActionController::class, 'create'])->name('action.create');
Route::get('/actions/{id}/edit', [ActionController::class, 'edit'])->name('action.edit');
Route::put('actions/{id}', [ActionController::class, 'update'])->name('action.update');
Route::delete('actions/{id}', [ActionController::class, 'destroy'])->name('action.delete');

// // Route for Town
// Route::get('towns', [TownController::class, 'index'])->name('town.all');
// Route::get('towns/{id}', [TownController::class, 'show'])->name('town.show');
// Route::post('towns', [TownController::class, 'store'])->name('town.add');
// Route::get('/towns/create', [TownController::class, 'create'])->name('town.create');
// Route::get('/towns/{id}/edit', [TownController::class, 'edit'])->name('town.edit');
// Route::put('towns/{id}', [TownController::class, 'update'])->name('town.update');
// Route::delete('towns/{id}', [TownController::class, 'destroy'])->name('town.delete');

// // Route for Partner
// Route::get('partners', [PartnerController::class, 'index'])->name('partner.all');
// Route::get('partners/{id}', [PartnerController::class, 'show'])->name('partner.show');
// Route::post('partners', [PartnerController::class, 'store'])->name('partner.add');
// Route::get('/partners/create', [PartnerController::class, 'create'])->name('partner.create');
// Route::get('/partners/{id}/edit', [PartnerController::class, 'edit'])->name('partner.edit');
// Route::put('partners/{id}', [PartnerController::class, 'update'])->name('partner.update');
// Route::delete('partners/{id}', [PartnerController::class, 'destroy'])->name('partner.delete');

// demo extra Route for Structures
Route::get('structures', [StructureController::class, 'index'])->name('structure.all');
Route::post('structures', [StructureController::class, 'store'])->name('structure.store');
Route::get('structures/create', [StructureController::class, 'create'])->name('structure.create');
Route::get('structures/{id}', [StructureController::class, 'show'])->name('structure.show');
Route::get('structures/{id}/edit', [StructureController::class, 'edit'])->name('structure.edit');
Route::put('structures/{id}', [StructureController::class, 'update'])->name('structure.update');
Route::delete('structures/{id}', [StructureController::class, 'destroy'])->name('structure.delete');
