<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;


Route::resource('users', App\Http\Controllers\User\UserController::class);



?>