<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('hello','HelloController@index');
Route::get('/','StudentController@index')->name('students.index');
Route::post('delete/{student}','StudentController@delete')->name('students.delete');
Route::get('add-student','StudentController@create')->name('students.add');
Route::post('add-student/store','StudentController@store')->name('students.store');
Route::get('edit-student/{student}','StudentController@edit')->name('students.edit');
Route::post('update-student/{student}','StudentController@update')->name('students.update');
