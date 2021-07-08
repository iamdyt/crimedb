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

Route::get('/', function(){
    return view('layout.master');
});

Route::get('station/add', 'StationController@create')->name('station.add');
Route::post('station/add', 'StationController@store')->name('station.store');
Route::get('station/edit/{ref}', 'StationController@edit')->name('station.edit');
Route::get('station/all', 'StationController@showAll')->name('station.all');
Route::post('station/edit/{ref}', 'StationController@update')->name('station.update');

// Department Routes
Route::get('department/add', 'DepartmentController@create')->name('department.add');
Route::post('department/add', 'DepartmentController@store')->name('department.store');
Route::get('department/all', 'DepartmentController@showAll')->name('department.all');
Route::get('department/edit/{id}', 'DepartmentController@edit')->name('department.edit');
Route::post('department/{id}/update', 'DepartmentController@update')->name('department.update');
Route::get('department/delete/{id}', 'DepartmentController@delete')->name('department.delete');

// Rank Routes
Route::get('rank/add', 'RankController@create')->name('rank.create');
Route::post('rank/add', 'RankController@store')->name('rank.store');
Route::get('rank/all', 'RankController@showAll')->name('rank.all');
Route::get('rank/edit/{id}', 'RankController@edit')->name('rank.edit');
Route::post('rank/{id}/update', 'RankController@update')->name('rank.update');
Route::get('rank/delete/{id}', 'RankController@delete')->name('rank.delete');

//officer Routes
Route::get('officer/add', 'OfficerController@create')->name('officer.create');
Route::post('officer/add', 'OfficerController@store')->name('officer.store');
Route::get('officers/all', 'OfficerController@showAll')->name('officer.all');
Route::get('officer/edit/{id}', 'OfficerController@edit')->name('officer.edit');
Route::post('officer/{id}/update', 'OfficerController@update')->name('officer.update');
Route::get('officer/delete/{id}', 'OfficerController@delete')->name('officer.delete');

// central Admin routes
