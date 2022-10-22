<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/home', [HomeController::class, 'Home']);

Route::get('/dashboard', [UserController::class, 'Dashboard']);

Route::get('/admin/dashboard', [AdminController::class, 'Dashboard']);

Route::get('/admin/maps', [AdminController::class, 'ShowMaps']) -> name('admin.showMaps');

Route::get('/admin/maps/insert', [AdminController::class, 'ShowInsertMap']) -> name('admin.showAddMap');

Route::post('/admin/maps/insert', [AdminController::class, 'AddMap']) -> name('admin.addMap');

Route::get('/admin/maps/delete/{map}', [AdminController::class, 'DeleteMap']) -> name('admin.deleteMap');