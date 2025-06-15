<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavigationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [NavigationController::class, 'view_landingpage'])->name('view.landingpage');

Route::get('/signup', [NavigationController::class, 'view_signup'])->name('view.signup');
Route::post('/post-signup', [AuthController::class, 'post_signup'])->name('post.signup');

Route::get('/login', [NavigationController::class, 'view_login'])->name('view.login');
Route::post('/login', [AuthController::class, 'post_login'])->name('post.login');

Route::get('/logout', [AuthController::class, 'post_logout'])->name('post.logout');

Route::get('/jobappdetail/{slug}', [NavigationController::class, 'view_jobappdetail'])
    ->middleware('checkrole:0,1')
    ->name('view.jobappdetail');

Route::get('/myprofile/{slug}', [NavigationController::class, 'view_myprofile'])->name('view.myprofile')->middleware('checkrole:1');
