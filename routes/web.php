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
    return redirect()->route('login.view');
});

Route::get('/dashboard','UserController@dashboard')->name('dashboard');

// Auth Routes
Route::get('register', 'UserController@registerView')->name('register.view');
Route::post('register', 'UserController@register')->name('register.post');
Route::get('login', 'UserController@loginView')->name('login.view');
Route::post('login', 'UserController@login')->name('login.post');
Route::get('logout', function(){auth()->logout(); session()->flush(); return redirect()->route('login.view');})->name('logout');

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

// Case,Complainant,Accused and Victim routes
Route::get('complainant/add','CaseFileController@complainantView')->name('complainant.add');
Route::post('complainant/store', 'CaseFileController@storeComplainant')->name('complainant.store');
Route::get('victim/new', 'CaseFileController@victimView')->name('victim.add');
Route::post('victim/store', 'CaseFileController@storeVictim')->name('victim.store');
Route::get('accused/new', 'CaseFileController@accusedView')->name('accused.add');
Route::post('accused/store', 'CaseFileController@storeAccused')->name('accused.store');
Route::get('case/new', 'CaseFileController@caseView')->name('case.add');
Route::post('case/store', 'CaseFileController@storeCase')->name('case.store');
Route::get('case/all', 'CaseFileController@allClerkView')->name('case.clerk.all');
Route::get('case/{ref}/view', 'CaseFileController@singleClerkView')->name('case.clerk.single');
Route::get('station/accuseds/all', 'AccusedController@accusedPerStation')->name('accused.station.all');
Route::get('station/victims/all',  'VictimController@victimPerStation')->name('victim.station.all');
Route::get('station/complainants/all', 'ComplainantController@complainantPerStation')->name('complainants.station.all');
Route::get('accused/{id}/{status}', 'AccusedController@changeStatus')->name('accused.status.change');

// central Admin routes
