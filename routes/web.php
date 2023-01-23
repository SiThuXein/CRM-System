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
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\ProductReportController;
use App\Http\Controllers\admin\SummaryProductSoldController;
use App\Http\Controllers\admin\SummaryActivitiesController;
use App\Http\Controllers\admin\PipelineSaleController;
use App\Http\Controllers\admin\ActivitiesSaleController;
use App\Http\Controllers\admin\CustomerDetailController;


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
Route::post('/admin/dashboard/pipeline',[PipeLineController::class,'search']);
Route::get('/admin/dashboard/pipeline/detail/{id}',[PipeLineController::class,'pipeline_detail']);
Route::get('admin/dashboard/teamlist',[TeamListController::class,'index']);
Route::get('admin/dashboard/teamlist/edit/{id}',[EditUserController::class,'index']);
Route::post('admin/dashboard/teamlist/edit/{id}',[EditUserController::class,'edit'])->name('edit info');
Route::get('admin/dashboard/complain',[ComplainController::class,'index']);
Route::get('admin/dashboard/complain/add',[ComplainController::class,'add']);
Route::post('admin/dashboard/complain/add',[ComplainController::class,'create']);
Route::get('admin/dashboard/assign',[AssignController::class,'index']);
Route::post('admin/dashboard/assign',[AssignController::class,'create']);
Route::get('/admin/dashboard/activities',[ActivitiesController::class,'activities']);
Route::post('/admin/dashboard/activities',[ActivitiesController::class,'search']);
Route::get('/admin/dashboard/activities/detail/{id}',[ActivitiesController::class,'activities_detail']);
Route::post('/admin/dashboard/activities/detail/close/{id}',[ActivitiesController::class,'close_account']);
Route::get('/admin/dashboard/activities/report',[ReportController::class,'activities_report']);
Route::post('/admin/dashboard/activities/report',[ReportController::class,'search']);
Route::get('/admin/dashboard/product/report',[ProductReportController::class,'product_report']);
Route::post('/admin/dashboard/product/report',[ProductReportController::class,'search_report']);
Route::get('/admin/dashboard/summary/product/sold',[SummaryProductSoldController::class,'summary_product_sold']);
Route::get('/admin/dashboard/summary/activities',[SummaryActivitiesController::class,'summary_activities']);   
Route::post('/admin/dashboard/summary/activities',[SummaryActivitiesController::class,'search_summary_activities']);

Route::get('/admin/user/pipeline',[PipelIneSaleController::class,'index']);
Route::post('/admin/user/pipeline',[PipelIneSaleController::class,'search_pipeline']);
Route::get('/admin/user/activities',[ActivitiesSaleController::class,'index']);
Route::post('/admin/user/activities',[ActivitiesSaleController::class,'search_activities']);
Route::get('/admin/customer/detail/{id}',[CustomerDetailController::class,'index']);
Route::post('/admin/customer/detail/{id}',[CustomerDetailController::class,'add_complain']);


// Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>'auth'],function(){

// });
