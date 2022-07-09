<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
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

//Pages
Route::get('/', [PagesController::class, 'index']);
Route::get('/lecturer', [PagesController::class, 'lecturerLogin'])->middleware('alreadyLoggedIn');
Route::get('/dancing', [PagesController::class, 'dancingLogin'])->middleware('alreadyLoggedIn');
Route::get('/french', [PagesController::class, 'frenchLogin'])->middleware('alreadyLoggedIn');
Route::get('/english', [PagesController::class, 'englishLogin'])->middleware('alreadyLoggedIn');
Route::get('/signup', [PagesController::class, 'signup'])->middleware('alreadyLoggedIn');
Route::get('/forgot-password', [PagesController::class, 'forgotPassword']);
Route::get('/dashboard', [PagesController::class, 'lecturerDashboard'])->middleware('isLoggedIn');

//Logout
Route::get('/logout', [AuthController::class, 'logout']);

//Post Methods
Route::post('/register', [AuthController::class, 'lecturerRegistration'])->name('register-lecturer');
Route::post('/lecturer-login', [AuthController::class, 'lecturerLogin'])->name('lecturer-login');


