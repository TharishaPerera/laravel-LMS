<?php

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
Route::get('/lecturer', [PagesController::class, 'lecturerLogin']);
Route::get('/dancing', [PagesController::class, 'dancingLogin']);
Route::get('/french', [PagesController::class, 'frenchLogin']);
Route::get('/english', [PagesController::class, 'englishLogin']);
Route::get('/signup', [PagesController::class, 'signup']);
