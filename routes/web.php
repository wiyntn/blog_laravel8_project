<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/services', [FrontendController::class, 'services']);
Route::get('/blogs', [FrontendController::class, 'blogs']);
Route::get('/projects', [FrontendController::class, 'projects']);
Route::get('/video_gallery', [FrontendController::class, 'video_gallery']);
Route::get('/photo_gallery', [FrontendController::class, 'photo_gallery']);
