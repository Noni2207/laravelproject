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
// Static Pages

Route::get('/', 'App\Http\Controllers\StaticPagesController@home'); //Home page
Route::get('/menu', 'App\Http\Controllers\StaticPagesController@menu');
Route::get('/menu/{slug}', 'App\Http\Controllers\StaticPagesController@singleMenu');
Route::get('/about', 'App\Http\Controllers\StaticPagesController@about');
Route::get('/waitlist', 'App\Http\Controllers\StaticPagesController@waitlist');
Route::get('/offers', 'App\Http\Controllers\StaticPagesController@offers');


// Admin Dashboard
Route::get('/admin', 'App\Http\Controllers\admin\AdminController@dashboard');

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



