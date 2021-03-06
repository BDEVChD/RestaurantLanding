<?php

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

Route::get('/', 'StaticPagesController@home');

Route::get('/admin', 'admin\AdminController@dashboard');

//Admin Food Categories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');



//Admin Customers
Route::get('/admin/offers-members', 'admin\CustomersController@allOffersMembers');
Route::get('/admin/reservations', 'admin\CustomersController@allReservations');

//Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});


//Food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

//Admin Users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::get('/admin/users/create', 'admin\UsersController@create');




//Static Pages
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');
Route::get('/reservations', 'StaticPagesController@reservations'); 
Route::get('/about', 'StaticPagesController@about'); 