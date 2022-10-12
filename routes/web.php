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
// Homepage
Route::get('/', function () {
    return view('home');
});

// Admin Dashboard
Route::get('/admin', function () {
    return view('admin/dashboard');
});

// Admin FoodCategories
Route::get('/admin/food-categories', 'App\Http\Controllers\admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'App\Http\Controllers\admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/edit', 'App\Http\Controllers\admin\FoodCategoriesController@edit');

// Admin Authentication  
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});

// Static Pages
Route::get('/menu', function () {
    return view('menu/index');
});
Route::get('/menu/{slug}', function () {
    return view('menu/single-menu');
});

Route::get('/about', 'App\Http\Controllers\StaticPagesController@about');
Route::get('/waitlist', 'App\Http\Controllers\StaticPagesController@waitlist');
Route::get('/offers', 'App\Http\Controllers\StaticPagesController@offers');


