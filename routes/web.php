<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('hello','HelloController@index');

// check Login 
Route::group(['middleware'=>['check_login']],function(){
    Route::group(['middleware'=>['check_admin']],function(){
        // 1 . students
        Route::get('/','StudentController@index')->name('students.index');
        Route::post('delete/{student}','StudentController@delete')->name('students.delete');
        Route::get('add-student','StudentController@create')->name('students.add');
        Route::post('add-student/store','StudentController@store')->name('students.store');
        Route::get('edit-student/{student}','StudentController@edit')->name('students.edit');
        Route::post('update-student/{student}','StudentController@update')->name('students.update');

        // 2. Users
        Route::get('users','UserController@index')->name('users.index');
        Route::post('users/delete/{user}','UserController@delete')->name('users.delete');
        Route::get('add-user','UserController@create')->name('users.add');
        Route::post('add-user/store','UserController@store')->name('users.store');
        Route::get('edit-user/{user}','UserController@edit')->name('users.edit');
        Route::post('update-user/{user}','UserController@update')->name('users.update');
    });

    
});

// Route::view('not', 'errors/404');

// 3. Route login/ logout
Route::get('login','Auth\LoginController@getLoginForm')->name('auth.getLoginForm');
Route::post('login','Auth\LoginController@login')->name('auth.login');
Route::get('logout','Auth\LoginController@logout')->name('auth.logout');

