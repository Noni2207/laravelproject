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
Route::get('/reservations', 'App\Http\Controllers\StaticPagesController@reservations');
Route::post('/reservations', 'App\Http\Controllers\StaticPagesController@saveReservation');
Route::get('/reservations/thank-you', 'App\Http\Controllers\StaticPagesController@thankYou');
Route::get('/contact', 'App\Http\Controllers\StaticPagesController@contact');
Route::get('/offers', 'App\Http\Controllers\StaticPagesController@offers');
Route::post('/offers', 'App\Http\Controllers\StaticPagesController@registerMember');
Route::get('/offers/thank-you', 'App\Http\Controllers\StaticPagesController@thankYou');


// Admin Dashboard
Route::get('/admin', 'App\Http\Controllers\admin\AdminController@dashboard');

// Admin FoodCategories
Route::get('/admin/food-categories', 'App\Http\Controllers\admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'App\Http\Controllers\admin\FoodCategoriesController@create');
Route::post('/admin/food-categories', 'App\Http\Controllers\admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit', 'App\Http\Controllers\admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}', 'App\Http\Controllers\admin\FoodCategoriesController@update');
Route::delete('/admin/food-categories/{id}/delete', 'App\Http\Controllers\admin\FoodCategoriesController@delete');

// Admin FoodItems
Route::get('/admin/food-items', 'App\Http\Controllers\admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'App\Http\Controllers\admin\FoodItemsController@create');
Route::post('/admin/food-items', 'App\Http\Controllers\admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'App\Http\Controllers\admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}', 'App\Http\Controllers\admin\FoodItemsController@update');
Route::delete('/admin/food-items/{id}/delete', 'App\Http\Controllers\admin\FoodItemsController@delete');


// Admin Users
Route::get('/admin/users', 'App\Http\Controllers\admin\UsersController@index');
Route::get('/admin/users/create', 'App\Http\Controllers\admin\UsersController@create');
Route::post('/admin/users', 'App\Http\Controllers\admin\UsersController@store');
Route::get('/admin/users/{id}/edit', 'App\Http\Controllers\admin\UsersController@edit');
Route::put('/admin/users/{id}', 'App\Http\Controllers\admin\UsersController@update');
//Route::get('/admin/users/{id}/delete', 'App\Http\Controllers\admin\UsersController@delete'); --GET request
Route::delete('/admin/users/{id}/delete', 'App\Http\Controllers\admin\UsersController@delete');

// Admin Customers
// Admin Members
Route::get('/admin/members', 'App\Http\Controllers\admin\MemberController@index');
Route::delete('/admin/members/{id}/delete', 'App\Http\Controllers\admin\MemberController@delete');

// Admin Reservation
Route::get('/admin/reservation', 'App\Http\Controllers\admin\CustomersController@allReservation');


// Admin Authentication  
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
