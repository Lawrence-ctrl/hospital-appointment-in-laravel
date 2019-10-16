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

Route::get('/', 'User\DashboardController@index')->name('user.dashboard'); 
Route::post('change','User\DashboardController@change')->name('user.dashboard.change');
Route::post('forchange','User\DashboardController@forchange')->name('user.dashboard.forchange');
Route::post('appoint','AppointmentController@index')->name('appoint');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.', 'prefix' => 'admin', 'middleware' => ['auth','admin']], function(){
    Route::get('dashboard','AdminDashboardController@index')->name('dashboard');
    Route::resource('department','Admin\DepartmentController');
    Route::resource('doctor','Admin\DoctorController');
    Route::get('appoint','AppointmentController@show')->name('appoint.show');
    Route::post('appoint/choice','AppointmentController@choice')->name('appoint.choice');
    Route::get('appoint/history','AppointmentController@history')->name('appoint.history');
}); 

Route::group(['as'=>'doctor.','prefix' => 'doctor', 'middleware' => ['auth','doctor']],function(){
    Route::get('dashboard', 'AdminDashboardController@hello')->name('dashboard');
});