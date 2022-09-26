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

Route::get('/home', [\App\Http\Controllers\HomeController::class,'home']); 

Route::get('/about', [\App\Http\Controllers\AboutController::class,'about']); 

Route::get('/certificate', [\App\Http\Controllers\CertificateController::class,'certificate']); 

Route::get('/specialty', [\App\Http\Controllers\SpecialtyController::class,'specialty']); 

Route::get('/projects', [\App\Http\Controllers\ProjectsController::class,'projects']); 

Route::get('/contact', [\App\Http\Controllers\ContactController::class,'contact']); 
