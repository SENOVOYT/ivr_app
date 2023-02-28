<?php
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
use Illuminate\Support\Facades\File;
use App\Http\Controllers\RestedController;
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
    return redirect()->route('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth'  
])->group(function () {

    ////////////////////start of rested routes ///////////////////////////////////////////////////////////////////
    Route::get('/user/rested/update', [ RestedController::class, 'index' ] )->name('user.rested.update');

    Route::post('/user/rested/process', [ RestedController::class, 'update_rest' ] )->name('user.rested.process');
    //////////////////////end of rested routes////////////////////////////////////////////////////////////////////

    Route::middleware([
        'rested'
    ])->group(function () {

        foreach (File::allFiles(base_path('routes'.DS.'Authorized')) as $partial) {
            require_once $partial->getPathname();
        }
        //Dashboard
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/editsidebar', function () {
            return view('edit-sidebar');
        })->name('editsidebar')->middleware('permission:edit_sidebar');
    
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
});
