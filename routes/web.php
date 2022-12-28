<?php

use App\Http\Controllers\admin\AppoinmentController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\front\LoginController as FrontLoginController;
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
//     return view('admin.app');
// });


// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });



Route::group(
    ['prefix' => 'dashboard', 'namespace' => 'admin'],
    function () {
        Route::group(['middleware' => ['auth:web']], function () {
            Route::get('/', [dashboardController::class, 'index'])->name('dashboard.index');
            Route::get('appoinments', [AppoinmentController::class, 'index'])->name('appoinments.index');
            Route::delete('appoinments-delete/{id}', [AppoinmentController::class, 'delete'])->name('appoinments.delete');
           
        });
    }
);
//backend_routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginForm'])->name('user.login');


//frontend_routes
Route::get('/patient-login', [FrontLoginController::class, 'PatientLogin'])->name('patient.login');
Route::post('/patient-login', [FrontLoginController::class, 'PatientLoginForm'])->name('patient.login.form');
Route::get('/home', [FrontController::class, 'index'])->name('front.index');
Route::post('/select-sympotom', [FrontController::class, 'sympotomForm'])->name('sympotom');
Route::get('/need-doctor', [FrontController::class, 'ISNeed'])->name('need.doctor');
Route::get('/no-need-doctor', [FrontController::class, 'NoNeed'])->name('NoNeed.doctor');
Route::post('/appoinment', [FrontController::class, 'appoinment'])->name('appoinment');



