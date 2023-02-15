<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth',
])->group(function () {
    ////////////////////start of rested routes
    Route::get('/user/rested/update', function () {
        return view('rested');
    })->name('user.rested.update');

    Route::post('/user/rested/process', [
        \App\Http\Controllers\rested::class,'update_rest'
    ])->name('user.rested.process');
    //////////////////////end of rested routes
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth',
    'rested'
    
])->group(function () {

    
        //Dashboard
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('/editsidebar', function () {
            return view('edit-sidebar');
        })->name('editsidebar');
    

        //Permissions
        Route::group(['middleware' => ['permission:user_create']], function () {
            //

        });
        Route::group(['middleware' => ['permission:user_edit']], function () {
            //
            

        });
        Route::group(['middleware' => ['permission:user_show']], function () {
            //

        });

        Route::group(['middleware' => ['permission:user_detete']], function () {
            //

        });
    


});
