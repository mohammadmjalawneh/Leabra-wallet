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

Route::get('/', 'Usercontroller@index');
Route::get('/Register', 'Usercontroller@indexReg');
Route::post('Register', 'Usercontroller@store');
Route::post('/', "Usercontroller@login");
Route::get('users/usersindex', 'userLogin@index');
Route::get('/Logout', "Usercontroller@destroy");
Route::get('user/AddSubcategory', 'userLogin@index2');
Route::post('users/AddSubcategory', 'subcategorycotroller@store');
Route::get('users/Transaction', 'Transaction@index');
Route::get('users/Transaction/{id}', 'Ajaxcontroller@getdata');
Route::post('users/Transaction', 'Transaction@store');
Route::get('users/Summary', 'SummaryController@index');
Route::get('users/Charts', 'ChartController@index');
Route::get('admin', 'Admincontroller@index');
Route::get('Admin/login', 'Adminlogincontroller@index');
Route::post('Admin/login', 'Adminlogincontroller@checklogin');
Route::get('Admin/index', 'Admincontroller@index');
Route::get('Admin/Logout', "Admincontroller@destroy");
