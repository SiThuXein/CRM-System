<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\UserLoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\SearchController;
use App\Http\Controllers\admin\ViewDetailController;
use App\Http\Controllers\admin\PipeLineController;
use App\Http\Controllers\admin\ActivitiesController;
use App\Http\Controllers\admin\UserRegisterController;
use App\Http\Controllers\admin\TeamListController;
use App\Http\Controllers\admin\EditUserController;
use App\Http\Controllers\admin\ComplainController;
use App\Http\Controllers\admin\AssignController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[RegisterController::class,'index']);
Route::post('/register',[Registercontroller::class,'create']);
Route::get('/admin',[UserLoginController::class,'index']);
Route::post('/admin/login',[UserLoginController::class,'login']);
Route::get('/admin/register',[UserRegisterController::class,'index']);
Route::post('/admin/register',[UserRegisterController::class,'create']);
Route::get('/admin/dashboard',[DashboardController::class,'index']);
Route::get('/admin/dashboard/customer/pending',[CustomerController::class,'pending_customer']);
Route::get('/admin/dashboard/customer/closed',[CustomerController::class,'closed_customer']);
Route::get('/admin/dashboard/customer/pending/search',[SearchController::class,'search_pending_customer']);
Route::get('/admin/dashboard/customer/detail/{id}',[ViewDetailController::class,'index']);
Route::get('/admin/dashboard/pipeline',[PipeLineController::class,'index']);
Route::get('admin/dashboard/teamlist',[TeamListController::class,'index']);
Route::get('admin/dashboard/teamlist/edit/{id}',[EditUserController::class,'index']);
Route::post('admin/dashboard/teamlist/edit/{id}',[EditUserController::class,'edit']);
Route::get('admin/dashboard/complain',[ComplainController::class,'index']);
Route::get('admin/dashboard/complain/add',[ComplainController::class,'add']);
Route::post('admin/dashboard/complain/add',[ComplainController::class,'create']);
Route::get('admin/dashboard/assign',[AssignController::class,'index']);
Route::post('admin/dashboard/assign',[AssignController::class,'create']);
Route::get('/admin/dashboard/activities',[ActivitiesController::class,'activities']);
Route::post('/admin/dashboard/activities',[ActivitiesController::class,'search']);
Route::get('/admin/dashboard/activities/detail/{id}',[ActivitiesController::class,'activities_detail']);
Route::post('/admin/dashboard/activities/detail/close/{id}',[ActivitiesController::class,'close_account']);


// Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'],function(){

// });
