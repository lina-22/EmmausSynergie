<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Route for roles
Route::get('roles', [RoleController::class, 'index'])->name('role.all');
Route::get('roles/{id}', [RoleController::class, 'show'])->name('role.show');
Route::post('roles', [RoleController::class, 'store'])->name('role.store');
Route::get('/roles/create', [RoleController::class, 'create'])->name('role.create');
Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
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

// Route for Structures
Route::get('structures', [StructureController::class, 'index'])->name('structure.all');
Route::get('structures/{id}', [StructureController::class, 'show'])->name('structure.show');
Route::post('structures', [StructureController::class, 'store'])->name('structure.store');
Route::get('/structures/create', [StructureController::class, 'create'])->name('structure.create');
Route::get('/structures/{id}/edit', [StructureController::class, 'edit'])->name('structure.edit');
Route::put('structures/{id}', [StructureController::class, 'update'])->name('structure.update');
Route::delete('structures/{id}', [StructureController::class, 'destroy'])->name('structure.delete');

// Route for Town
// Route::get('events', [EventsController::class, 'index'])->name('event.all');
// Route::get('events/{id}', [EventsController::class, 'show'])->name('event.show');
// Route::post('events', [EventsController::class, 'store'])->name('event.add');
// Route::get('/events/create', [EventsController::class, 'create'])->name('event.create');
// Route::get('/events/{id}/edit', [EventsController::class, 'edit'])->name('event.edit');
// Route::put('events/{id}', [EventsController::class, 'update'])->name('event.update');
// Route::delete('events/{id}', [EventsController::class, 'destroy'])->name('event.delete');

// // Route for ActivitiesReport
// Route::get('activities', [ActivitiesReportController::class, 'index'])->name('activitie.all');
// Route::get('activities/{id}', [ActivitiesReportController::class, 'show'])->name('activitie.show');
// Route::post('activities', [ActivitiesReportController::class, 'store'])->name('activitie.add');
// Route::get('/activities/create', [ActivitiesReportController::class, 'create'])->name('activitie.create');
// Route::get('/activities/{id}/edit', [ActivitiesReportController::class, 'edit'])->name('activitie.edit');
// Route::put('activities/{id}', [ActivitiesReportController::class, 'update'])->name('activitie.update');
// Route::delete('activities/{id}', [ActivitiesReportController::class, 'destroy'])->name('activitie.delete');

// // Route for Town
// Route::get('towns', [TownController::class, 'index'])->name('town.all');
// Route::get('towns/{id}', [TownController::class, 'show'])->name('town.show');
// Route::post('towns', [TownController::class, 'store'])->name('town.add');
// Route::get('/towns/create', [TownController::class, 'create'])->name('town.create');
// Route::get('/towns/{id}/edit', [TownController::class, 'edit'])->name('town.edit');
// Route::put('towns/{id}', [TownController::class, 'update'])->name('town.update');
// Route::delete('towns/{id}', [TownController::class, 'destroy'])->name('town.delete');

// // Route for Structures
// Route::get('partners', [PartnerController::class, 'index'])->name('partner.all');
// Route::get('partners/{id}', [PartnerController::class, 'show'])->name('partner.show');
// Route::post('partners', [PartnerController::class, 'store'])->name('partner.add');
// Route::get('/partners/create', [PartnerController::class, 'create'])->name('partner.create');
// Route::get('/partners/{id}/edit', [PartnerController::class, 'edit'])->name('partner.edit');
// Route::put('partners/{id}', [PartnerController::class, 'update'])->name('partner.update');
// Route::delete('partners/{id}', [PartnerController::class, 'destroy'])->name('partner.delete');
