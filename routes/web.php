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

Route::get('/', 'HomeController@index');
Route::get('/college/{id}', 'HomeController@showCollege')->name('college');
Route::get('/colleges', 'HomeController@showAllColleges');
Route::get('/rankings', 'HomeController@rankColleges');
Route::get('/favorites', 'FavoriteController@index')->middleware('auth');
Route::get('/me', 'HomeController@showProfile')->middleware('auth');
Route::post('/me', 'HomeController@saveProfile')->middleware('auth');
Route::post('/rating', 'RatingController@store')->middleware('auth');
Route::post('/rating/{id}', 'RatingController@update')->middleware('auth');
Route::get('/rating/{id}/delete', 'RatingController@delete')->middleware('auth');
Route::get('/favorite/{id}', 'FavoriteController@add')->middleware('auth');
Route::get('search', 'HomeController@search')->name('search');
Route::get('blog', 'HomeController@blog')->name('blog');
Auth::routes();
Route::get('about', 'HomeController@about')->name('about');

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->middleware(['can.access.admin'])->prefix('admin')->group(function() {
	Route::get('/college/{collegeId}/{action}/student/{studentId}', 'CollegeController@handleAction');
	Route::get('/', 'AdminController@index');
	Route::resource('users', 'UserController');
	Route::resource('levels', 'LevelController');
	Route::resource('affiliations', 'AffiliationController');
	Route::resource('faculties', 'FacultyController');
	Route::resource('colleges', 'CollegeController');
});
