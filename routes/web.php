<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController;


/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function (){
    return view('home');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/about', function (){
    return view('about');
});*/

/* Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/admin/products', [ProductController::class, 'index']);*/

Route::get('/', [HomeController::class, 'index1']);
Route::get('/zapis', [HomeController::class, 'zapis']);
Route::get('/test', [HomeController::class, 'test']);