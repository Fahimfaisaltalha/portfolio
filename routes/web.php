<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController ::class, 'index']);
Route::get('about', [AboutController ::class, 'index']);
Route::get('services',[ServicesController ::class, 'index']);
Route::get('portfolio',[PortfolioController ::class, 'index']);
Route::get('contact',[ContactController ::class, 'index']);
