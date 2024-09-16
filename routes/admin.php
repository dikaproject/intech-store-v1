<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('permissions', PermissionController::class)->middleware('role:admin');
Route::delete('permissions/{permission}/delete', [PermissionController::class, 'destroy'])->name('permissions.destroy')->middleware('role:admin');

Route::resource('roles', RoleController::class)->middleware('role:admin');
Route::delete('roles/{role}/delete', [RoleController::class, 'destroy'])->name('roles.destroy')->middleware('role:admin');
Route::get('roles/{role}/permissions', [RoleController::class, 'permissions'])->name('roles.permissions')->middleware('role:admin');
Route::post('roles/{role}/permissions', [RoleController::class, 'attachPermissions'])->name('roles.attachPermissions')->middleware('role:admin');
