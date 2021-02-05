
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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

//Route::get('/','departmentsController@index');
Route::get('/','HomeController@index');

Route::get('/Purback','purchaseorderController@create');

Route::get('/Receive','ReceiveController@create');

Route::get('/Planing','ProductionPlanningController@create');

Route::resource('/dep', 'departmentsController');

Route::resource('/part', 'PartnerController');

Route::resource('/mat', 'MaterialsController');

Route::resource('type', 'TypeProductController');

Route::resource('Pro', 'ProductController');

Route::resource('emp', 'employeeController');

Route::resource('admin', 'adminController');

Route::resource('comp', 'componentController');

Route::resource('comde', 'componentdetailController');

Route::resource('Pur', 'purchaseorderController');

Route::resource('Rec', 'ReceiveController');

Route::resource('Pdet', 'purchaseorderdetailController');

Route::resource('Plan', 'ProductionPlanningController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testregister', 'Auth\RegisterController@test');

Route::get('/out', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
