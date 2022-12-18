<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Route;


Route::get('/', ('HomeController@home'))->name('site.home'); 
Route::get('/about', ('AboutController@about'))->name('site.about'); 
Route::get('/certificate', ('CertificateController@certificate'))->name('site.certificate'); 
Route::get('/specialty', ('SpecialtyController@specialty'))->name('site.specialty'); 
Route::get('/projects', ('ProjectsController@projects'))->name('site.projects'); 
Route::get('/contact', ('ContactController@contact'))->name('site.contact'); 
Route::get('/export', 'AboutController@export')->name('export');

Route::fallback(function() {
    echo 'A rota acessada não existe.<a href="'.route('site.home').'">clique aqui</a> para ir para pagina inicial';
});
