<?php

use App\Models\User;
use Flasher\Laravel\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Auth\AdminRegisterController;
use App\Http\Controllers\Dashboard\User\UserController;

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
//     return view('welcome');
// });

/* ----------------------- Start Authentication -----------------------*/

// define('ADMIN_URL',config('app.url_admin'));
// define('ADMIN_URL','auth/admins/private');
define('PAGINATE_COUNT',10);

Route::name('auth.')->middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'loginForm'])->name('loginForm');
    Route::post('login', [LoginController::class, 'submitLogin'])->name('login');

    Route::get(config('app.url_admin').'/register', [AdminRegisterController::class, 'registerForm'])->name('.admin.registerForm');
    Route::post('/admin/auth/register', [AdminRegisterController::class, 'register'])->name('admin.register');
    
    Route::get('register', [UserRegisterController::class, 'registerForm'])->name('user.registerForm');
    Route::post('register', [UserRegisterController::class, 'register'])->name('user.register');

    // register
});

Route::get('logout', LogoutController::class)->middleware('auth')
    ->name('auth.logout');
/* ----------------------- End Authentication -----------------------*/

Route::name('dashboard.')->prefix('dashboard')->middleware('role:admin')->group(function () {
    Route::resource('users',UserController::class)->middleware('role:admin'); 
});

Route::get('profile',ProfileController::class)->name('user.profile')->middleware('role:user'); 

