<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\GoogleLoginController;

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

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'Dashboard']);


    Route::prefix('maps')->group(function () {
        Route::get('/', [AdminController::class, 'ShowMaps']) -> name('admin.showMaps');
    
        Route::get('/insert', [AdminController::class, 'ShowInsertMap']) -> name('admin.showAddMap');
        
        Route::post('/insert', [AdminController::class, 'AddMap']) -> name('admin.addMap');
        
        Route::get('/delete/{map}', [AdminController::class, 'DeleteMap']) -> name('admin.deleteMap');
    });


    Route::prefix('operators')->group(function () {
        Route::get('/', [AdminController::class, 'ShowOperators']) -> name('admin.showOperators');
    
        // Route::get('/insert', [AdminController::class, 'ShowInsertMap']) -> name('admin.showAddMap');
        
        // Route::post('/insert', [AdminController::class, 'AddMap']) -> name('admin.addMap');
        
        // Route::get('/delete/{map}', [AdminController::class, 'DeleteMap']) -> name('admin.deleteMap');
    });  
   

});


    /*
    |--------------------------------------------------------------------------
    | Google Routes
    |--------------------------------------------------------------------------
    |
    */

    Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle']);
    Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

    Route::get('/prova', function () {
        dd('ciao');
    });
