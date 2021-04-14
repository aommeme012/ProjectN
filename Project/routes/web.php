
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
use App\Http\Controllers\purchaseorderController;
use App\RequisitionMaterial;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Auth;

//Route::get('/','departmentsController@index');
Route::get('/','HomeController@index');

Route::get('/Purback','purchaseorderController@create');

Route::get('/Receive','ReceiveController@create');

Route::get('/Planing','ProductionPlanningController@create');

Route::get('/Protion', 'ProductionController@create');

Route::get('/Planings','ProductionPlanningController@Show');

Route::get('/Ption','ProductionController@Show');

Route::get('/showlistproduction','ProductionController@Showlist');

Route::get('/RequiMat','RequisitionMaterialController@Show');

Route::get('/RequiPro','RequisitionProductController@Show');

Route::resource('/dep', 'departmentsController');

Route::resource('/part', 'PartnerController');

Route::resource('/mat', 'MaterialsController');

Route::resource('type', 'TypeProductController');

Route::resource('Pro', 'ProductController');

Route::resource('emp', 'employeeController');

Route::resource('comp', 'componentController');

Route::resource('comde', 'componentdetailController');

Route::get('pdf','PDFController@pdf');

Route::resource('report', 'ReportController');

Route::resource('Pur', 'purchaseorderController');
Route::get('Purpdf', 'purchaseorderController@update')->name('Purpdf');

Route::get('Purdetail', 'purchaseorderController@Show');

Route::get('PlanEmp', 'ProductionPlanningController@indexPlan');
Route::get('Recdep', 'ReceiveController@indexlistreceuve');
Route::get('productlist', 'ProductController@indexlist');
// Route::get('/FillPur','purchaseorderController@index');

Route::resource('Rec', 'ReceiveController');

Route::resource('Pdet', 'purchaseorderdetailController');

Route::resource('Plan', 'ProductionPlanningController');
Route::get('/editplan{id}', 'ProductionPlanningController@updateplan')->name('editplan');

Route::resource('RequiMM','RequisitionMaterialController');

Route::resource('RequiPP','RequisitionProductController');

Route::resource('P','ProductionController');


Route::post('/updatesuccess/{id}', 'ProductionController@updatesuccess');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testregister', 'Auth\RegisterController@test');

Route::get('/out', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
//----------------------------------------------------------------------------------------//

Route::get('/reportmat','ReportController@reportrequismat');
Route::get('/reportproduction','ReportController@reportproduction');
Route::get('/reportreproduct','ReportController@reportrequisproduct');
Route::get('/reportproduct','ReportController@reportproduct');


//-----------------------------------------------------------------------------------------//
Route::get('PurchaseDep','purchaseorderController@storeEmployee')->name('PurchaseDep');
Route::get('PurEmp', 'purchaseorderController@indexEmployee');
Route::get('createPur','purchaseorderController@createEmployee')->name('createPur');
Route::get('/Purshow', 'purchaseorderController@showEmployee')->name('Purshow');
Route::get('/Purpdfdep/{id}', 'purchaseorderController@updateEmployee')->name('Purpdfdep');
//-------------------------------------------------------------------------------------------//
Route::get('/indexpro','ProductController@indexlist2')->name('indexpro');
