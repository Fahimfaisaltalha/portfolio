<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController ::class, 'index']);
Route::get('about');
Route::get('services');
Route::get('portfolio');
Route::get('contact');
