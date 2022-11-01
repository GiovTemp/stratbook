<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\FacebookLoginController;
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

        Route::get('/edit/{map}', [AdminController::class, 'ShowEditMap']) -> name('admin.editMap');

        Route::get('/delete/{map}', [AdminController::class, 'DeleteMap']) -> name('admin.deleteMap');
        
    });


    Route::prefix('operators')->group(function () {
        Route::get('/', [AdminController::class, 'showOperators']) -> name('admin.showOperators');
    
        Route::get('/insert', [AdminController::class, 'ShowInsertOperator']) -> name('admin.showAddOperator');

        Route::get('/edit/{operator}',[AdminController::class,'showEditOperator'])->name('admin.showEditOperator');
        
        // Route::post('/insert', [AdminController::class, 'AddMap']) -> name('admin.addMap');
        
        // Route::get('/delete/{map}', [AdminController::class, 'DeleteMap']) -> name('admin.deleteMap');
    });  

    Route::prefix('abilities')->group(function () {
        Route::get('/', [AdminController::class, 'showAbilities']) -> name('admin.showAbilities');

        Route::get('/insert', [AdminController::class, 'ShowInsertAbilities']) -> name('admin.showAddAbilities');

        Route::get('/edit/{ability}', [AdminController::class, 'ShowEditAbility'])->name('admin.editAbility');
    
        
    });
    
    Route::prefix('primaries')->group(function(){
        Route::get('/', [AdminController::class, 'showPrimaries']) -> name('admin.showPrimaries');

        Route::get('/insert', [AdminController::class, 'showInsertPrimaries']) -> name('admin.showAddPrimaries');

        Route::get('/edit/{primary}', [AdminController::class, 'showEditPrimary']) -> name('admin.showEditPrimary');
    });

    Route::prefix('secondaries')->group(function(){
        Route::get('/', [AdminController::class, 'showSecondaries']) -> name('admin.showSecondaries');

        Route::get('/insert', [AdminController::class, 'showInsertSecondaries']) -> name('admin.showAddSecondaries');

        Route::get('/edit/{primary}', [AdminController::class, 'showEditSecondary']) -> name('admin.showEditSecondary');
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

    Route::get('auth/facebook', [FacebookLoginController::class, 'facebookRedirect']);
    Route::get('auth/facebook/callback', [FacebookLoginController::class, 'loginWithFacebook']);

    Route::get('/prova', [HomeController::class,'prova']);
