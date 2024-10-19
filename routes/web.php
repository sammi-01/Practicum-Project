<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\JobseekersController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\JobpostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\Frontend\JobseekersController as FrontendJobseekersController;
use App\Http\Controllers\Frontend\SearchController as FrontendSearchController;
use App\Http\Controllers\Frontend\JobpostController as FrontendJobpostController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\ApplicantController;
use App\Http\Controllers\Frontend\ApplyController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\CompanypostController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\SeekersController as FrontendSeekersController;

use App\Http\Controllers\MasterController;
use App\Http\Controllers\Frontend\FmasterController;
use App\Http\Controllers\Frontend\JobapplyController;
use App\Http\Controllers\Frontend\UserprofileController;
use App\Http\Controllers\Frontend\WebsitehomeController;
use App\Http\Controllers\SslCommerzPaymentController;
use Faker\Provider\da_DK\Company;
use Faker\Provider\de_AT\Company as De_ATCompany;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//Frontend for website
Route::get('/jobseekers',[FrontendJobseekersController::class,'jobseekeres'])->name('jobseeker.frontend');
Route::post('/login',[FrontendSeekersController::class,'login'])->name('seekers.login'); 
Route::post('/register',[FrontendSeekersController::class,'register'])->name('seekers.register'); 
Route::get('/jobpost/{p_id}',[FmasterController::class,'jobpost'])->name('frontend.jobpost');
Route::get('/logout',[FrontendSeekersController::class,'logout'])->name('seekers.logout'); 





//Company_post Frontend
Route::get('/companypost/{p_id}',[CompanypostController::class,'companypost'])->name('companypost.view.list');
//invoice 
 Route::get('/ivoice/{p_id}',[JobpostController::class,'invoice'])->name('payment.invoice');
//Category navbar
Route::get('/category',[FrontendCategoryController::class,'category'])->name('frontend.category');
 //contact ,about us ,home navbar
Route::get('/contact',[FrontendContactController::class,'contact'])->name('frontend.contact');
Route::get('/about',[AboutusController::class,'about'])->name('about.us');
Route::get('/home',[WebsitehomeController::class,'home'])->name('frontend.home');
//Main fmaster template
Route::get('/',[FmasterController::class,'fmaster'])->name('frontend.master');
Route::get('/search',[FrontendSearchController::class,'search'])->name('search');

//middleware frontend
Route::group(['middleware'=>'jobseeker_auth'],function(){
Route::get('/logout',[FrontendSeekersController::class,'logout'])->name('seekers.logout');
Route::get('/viewdetails/{c_id}',[CompanypostController::class,'view'])->name('viewcompany.details');
Route::get('/jobapply/{p_id}',[ApplyController::class,'apply'])->name('jobapply.applyform'); 
Route::post('/apply/{p_id}',[ApplyController::class,'applicant'])->name('jobapply.applicant');
Route::get('/profile',[UserprofileController::class,'userprofile'])->name('user.profile');
// Route::post('/applicant',[ApplyController::class,'applicantlist'])->name('applicantlist');

});


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
    Route::get('/company/view/{p_id}', [CompanyController::class, 'view'])->name('company.view');
    

    //jobpost
    Route::get('/jobpost',[JobpostController::class,'post'])->name('jobpost.list');
    
    Route::get('/jobpost-form',[JobpostController::class,'postform'])->name('jobpost.form');
    
    Route::post('/jobpost-store',[JobpostController::class,'poststore'])->name('jobpost.store');
   
    Route::get('/jobpost/delete/{p_id}', [JobpostController::class, 'delete'])->name('jobpost.delete');
    Route::get('/jobpost/view/{p_id}', [JobpostController::class, 'view'])->name('jobpost.view');
//payment


Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);


Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);







   //applicatants
   Route::get('/applicants',[ApplicationsController::class,'applications'])->name('applicants.list');
   Route::get('/applicants-form',[ApplicationsController::class,'form'])->name('applicants.form');
   Route::post('/applicants-store',[ApplicationsController::class,'store'])->name('applicants.store');





    //edit,delete,view
   Route::get('/companypost/delete/{p_id}',[CompanyController::class,'delete'])->name('companypost.delete');
   Route::get('/companypost/view/{p_id}',[CompanyController::class,'viewPost'])->name('companypost.view');
   Route::get('/companypost/edit/{p_id}',[CompanyController::class, 'edit'])->name('companypost.edit');
    
    
    
    
    
    
   
    
    
    
    //Category
    Route::get('/categorylist',[CategoryController::class,'category'])->name('Category.list');
    Route::get('/category',[CategoryController::class,'categoryf'])->name('Category.form');
    Route::post('/category-store',[CategoryController::class,'store'])->name('Category.store');
    Route::get('/category/delete/{p_id}',[CategoryController::class,'delete'])->name('category.delete');
   Route::get('/category/view/{p_id}',[CategoryController::class,'view'])->name('category.view');
    //job seekers
    Route::get('/jobseekers',[JobseekersController::class,'jobseekers'])->name('jobseekers.list');
    
    Route::get('/seekers-form',[JobseekersController::class,'form'])->name('jobseekers.form');
    
    Route::post('/seekers-store',[JobseekersController::class,'store'])->name('jobseekers.store');
    
    Route::get('/reports',[ReportsController::class,'reports'])->name('report.view');
    Route::get('/reports/generate',[ReportsController::class,'report_generate'])->name('report.generate');
    
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    

  
  
    
   });
});


Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);