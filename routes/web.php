<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\JobseekersController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\JobseekersController as FrontendJobseekersController;
use App\Http\Controllers\Frontend\JobpostController as FrontendJobpostController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Frontend\SeekersController as FrontendSeekersController;

use App\Http\Controllers\MasterController;
use App\Http\Controllers\Frontend\FmasterController;

use Faker\Provider\da_DK\Company;
use Faker\Provider\de_AT\Company as De_ATCompany;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//Frontend for website
Route::get('/jobseekers',[FrontendJobseekersController::class,'jobseekeres']);
Route::post('/login',[FrontendSeekersController::class,'login'])->name('seekers.login'); 
Route::post('/register',[FrontendSeekersController::class,'register'])->name('seekers.register'); 
Route::get('/jobpost',[FrontendjobpostController::class,'jobpost'])->name('frontend.jobpost');
Route::get('/logout',[FrontendSeekersController::class,'logout'])->name('seekers.logout'); 


//Main fmaster template
Route::get('/',[FMasterController::class,'fmaster'])->name('frontend.master');
Route::get('/search',[FrontendjobpostController::class,'search'])->name('search');
 
//middleware frontend
Route::group(['middleware'=>'jobseeker_auth'],function(){
  Route::get('/logout',[FrontendSeekersController::class,'logout'])->name('seekers.logout');
 // Route::get('checkout',[OrderController::class,'checkout'])->name('checkout');
 // Route::post('/placeorder',[OrderController::class,'placeOrder'])->name('place.order');
  //Route::get('/profile-page',[ProfileController::class,'profilePage'])->name("profile.page");
 // Route::get('/profile-order',[ProfileController::class,'profileOrder'])->name('profile.order');
 // Route::get('/view-Invoice/{order_id}',[OrderController::class,'viewInvoice'])->name('view.Invoice');
 
});

//company




    Route::group(['prefix'=>'admin'],function(){

    //Authantication
      Route::get('/login',[AuthorController::class,'login'])->name('login');
      Route::post('/dologin',[AuthorController::class,'loginprocess'])->name('submit.login');
      Route::group(['middleware'=>'auth'], function(){
      Route::get('/logout',[AuthorController::class,'logout'])->name('logout');
      
    
    
    //HomeController
    Route::get('/',[HomeController::class,'home'])->name('home');
    
    Route::get('/master',[MasterController::class,'master'])->name('master.panel');
    
    Route::get('/contact-us',[ContactController::class,'contact']);
    
    //company
    
    Route::get('/company',[CompanyController::class,'company'])->name('company.list');
    
    Route::get('/company-form',[CompanyController::class,'form'])->name('company.form');
    
    Route::post('/companies-store',[CompanyController::class,'store'])->name('company.store');
    
    
    
    
    
    //Business Setup
    // Route::get('/business',[BusinessController::class,'business']);
    
    
    Route::get('/search',[SearchController::class,'search'])->name('search');
    
    //applications
    Route::get('/applications',[ApplicationsController::class,'applications'])->name('applications.list');
    Route::get('/applications-form',[ApplicationsController::class,'form'])->name('Applications.form');
    Route::post('/applications-store',[ApplicationsController::class,'store'])->name('Applications.store');
    
    
    
    //Category
    Route::get('/categorylist',[CategoryController::class,'category'])->name('Category.list');
    Route::get('/category',[CategoryController::class,'categoryf'])->name('Category.form');
    Route::post('/category-store',[CategoryController::class,'store'])->name('Category.store');
    
    //job seekers
    Route::get('/jobseekers',[JobseekersController::class,'jobseekers'])->name('jobseekers.list');
    
    Route::get('/seekers-form',[JobseekersController::class,'form'])->name('jobseekers.form');
    
    Route::post('/seekers-store',[JobseekersController::class,'store'])->name('jobseekers.store');
    
    Route::get('/reports',[ReportsController::class,'reports']);
    
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    

  
  
    
   });
});