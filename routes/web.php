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
use App\Http\Controllers\admin\LogoutController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

    Route::get('/',[RegisterController::class,'index']);
    Route::post('/register',[Registercontroller::class,'create']);
    Route::get('/admin',[UserLoginController::class,'index']);
    Route::post('/admin/login',[UserLoginController::class,'login']);
    Route::get('/admin/register',[UserRegisterController::class,'index']);
    Route::post('/admin/register',[UserRegisterController::class,'create']); 

Route::middleware(["auth"])->namespace("Admin")->prefix("admin/dashboard")->group(function(){
    //For Sale manager
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/customers',[CustomerController::class,'index']);
    // Route::get('/customer/pending/search',[SearchController::class,'search_pending_customer']);
    Route::get('/customer/detail/{id}',[ViewDetailController::class,'index']);
    Route::get('/pipeline',[PipeLineController::class,'index']);
    Route::post('/pipeline',[PipeLineController::class,'search']);
    Route::get('/pipeline/detail/{id}',[PipeLineController::class,'pipeline_detail']);
    Route::get('/teamlist',[TeamListController::class,'index']);
    Route::get('/teamlist/edit/{id}',[EditUserController::class,'index'])->name('edit info');
    Route::post('/teamlist/edit/{id}',[EditUserController::class,'edit']);
    Route::get('/complain',[ComplainController::class,'index']);
    Route::get('/complain/add',[ComplainController::class,'add']);
    Route::post('/complain/add',[ComplainController::class,'create']);
    Route::get('/assign/{id}',[AssignController::class,'index']);
    Route::post('/assign',[AssignController::class,'create']);
    Route::get('/activities',[ActivitiesController::class,'activities']);
    Route::post('/activities',[ActivitiesController::class,'search']);
    Route::get('/activities/detail/{id}',[ActivitiesController::class,'activities_detail']);
    Route::post('/activities/detail/close/{id}',[ActivitiesController::class,'close_account']);
    Route::get('/activities/report',[ReportController::class,'activities_report']);
    Route::post('/activities/report',[ReportController::class,'search']);
    Route::get('/product/report',[ProductReportController::class,'product_report']);
    Route::post('/product/report',[ProductReportController::class,'search_report']);
    Route::get('/summary/product/sold',[SummaryProductSoldController::class,'summary_product_sold']);
    Route::get('/summary/activities',[SummaryActivitiesController::class,'summary_activities']);   
    Route::post('/summary/activities',[SummaryActivitiesController::class,'search_summary_activities']);
    Route::get('/logout',[LogoutController::class,'logout']);
    Route::get('/profile',[ProfileController::class,'profile']); 
});

Route::middleware(["auth"])->namespace("Admin")->prefix("admin")->group(function(){
      //For Sale person
    Route::get('user/pipeline',[PipelIneSaleController::class,'index']);
    Route::post('user/pipeline',[PipelIneSaleController::class,'search_pipeline']);
    Route::get('user/activities',[ActivitiesSaleController::class,'index']);
    Route::post('user/activities',[ActivitiesSaleController::class,'search_activities']);
    Route::get('customer/detail/{id}',[CustomerDetailController::class,'index']);
    Route::post('customer/detail/{id}',[CustomerDetailController::class,'add_complain']);
});
  
Route::middleware(["auth"])->namespace("admin")->prefix("admin/panel")->group(function(){
    //For Admin
    Route::get('/',[AdminController::class,'index']);
    Route::get('/products',[ProductController::class,'index']);
    Route::post('/products',[ProductController::class,'product_search']);
    Route::get('products/add',[ProductController::class,'product']);
    Route::post('products/add',[ProductController::class,'add_product']);
    Route::get('products/edit/{id}',[ProductController::class,'edit_product']);
    Route::post('products/edit/{id}',[ProductController::class,'update_product']);
    Route::get('products/delete/{id}',[ProductController::class,'delete_product']);
    Route::get('/categories',[CategoryController::class,'index']);
    Route::post('/categories',[CategoryController::class,'category_search']);
    Route::get('categories/add',[CategoryController::class,'category']);
    Route::post('categories/add',[CategoryController::class,'add_category']);
    Route::get('categories/edit/{id}',[CategoryController::class,'edit_category']);
    Route::post('categories/edit/{id}',[CategoryController::class,'update_category']);
    Route::get('categories/delete/{id}',[CategoryController::class,'delete_category']);
});




