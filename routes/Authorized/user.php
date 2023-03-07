<?php

use Illuminate\Support\Facades\Route;



Route::resource('user', App\Http\Controllers\User\UserController::class);
Route::resource('authorization', App\Http\Controllers\Authorization\AuthorizationController::class);



?>