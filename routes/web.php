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



// Log in
Route::get('/', 'Auth\LoginController@showLoginForm');

Route::post('login','Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::get('register',function(){
    return view('login.register');
});


// Dashboard

Route::get('inicio','DashboardController@index')->name('inicio');

//

Route::get('user-perfil','DashboardController@perfil');



// Projects

Route::get('projects','ProjectsController@projects');
Route::get('projects/{project}','ProjectsController@show');
Route::get('myprojects','ProjectsController@myprojects');


//Task

Route::post('/projects/{project}/tasks','ProjectTasksController@store');