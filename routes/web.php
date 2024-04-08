<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CompetitionsController;
use App\Http\Controllers\GrantsController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\PDFController;
use App\Models\GrantsModel;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [AuthController::class,'landing'] );
Route::get('loginfront', [AuthController::class,'login'] );
Route::post('login', [AuthController::class,'Authlogin'] );
Route::get('logout', [AuthController::class,'logout'] );
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('post.register');
Route::get('forgot-password', [AuthController::class,'forgotpassword'] );
Route::post('forgot-password', [AuthController::class, 'PostForgotPassword'] );
Route::get('reset/{token}', [AuthController::class, 'reset'] ); 
Route::post('reset/{token}', [AuthController::class, 'PostReset'] ); 
Route::get('recommendation/{id}',[InspectionController::class,'show'] );
Route::get('recommendationform/{id}',[InspectionController::class,'showrule'] );
Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF']);




Route::group(['middleware' => 'admin'], function (){

    Route::get('admin/dashboard',[DashboardController::class,'dashboard'] );
    Route::get('admin/admin/list',[AdminController::class,'list'] );
    Route::get('admin/admin/add',[AdminController::class,'add'] );
    Route::post('admin/admin/add',[AdminController::class,'insert'] );
    Route::get('admin/admin/show/{id}',[AdminController::class, 'show'] );
    Route::get('admin/admin/edit/{id}',[AdminController::class, 'edit'] );
    Route::post('admin/admin/edit/{id}',[AdminController::class, 'update'] );
    Route::get('admin/admin/delete/{id}',[AdminController::class, 'delete'] );
    Route::get('admin/account',[UserController::class, 'MyAccount'] );
    Route::post('admin/account',[UserController::class, 'UpdateMyAccountAdmin'] );

    Route::get('admin/change_password',[UserController::class, 'change_password'] );
    Route::post('admin/change_password',[UserController::class, 'update_change_password'] );


    //student

    Route::get('admin/student/list',[StudentController::class,'list'] );
    Route::get('admin/student/add',[StudentController::class,'add'] );
    Route::post('admin/student/add',[StudentController::class,'insert'] );
    Route::get('admin/student/show/{id}',[StudentController::class,'show'] );
    Route::get('admin/student/edit/{id}',[StudentController::class,'edit'] );
    Route::post('admin/student/edit/{id}',[StudentController::class,'update'] );
    Route::get('admin/student/delete/{id}',[StudentController::class, 'delete'] );


     //inspector

     Route::get('admin/inspector/list',[InspectorController::class,'list'] );
     Route::get('admin/inspector/add',[InspectorController::class,'add'] );
     Route::post('admin/inspector/add',[InspectorController::class,'insert'] );
     Route::get('admin/inspector/show/{id}',[InspectorController::class,'show'] );
     Route::get('admin/inspector/edit/{id}',[InspectorController::class,'edit'] );
     Route::post('admin/inspector/edit/{id}',[InspectorController::class,'update'] );
     Route::get('admin/inspector/delete/{id}',[InspectorController::class, 'delete'] );
    

        //Register for Inspection
    Route::get('admin/registration/list',[RegistrationController::class,'adminlist'] );
    Route::get('admin/registration/delete/{id}',[RegistrationController::class, 'admindelete'] );
    Route::get('admin/registration/view/{id}',[RegistrationController::class, 'view'] );


     //Inspection
     Route::get('admin/inspection/compliance',[InspectionController::class,'compliancelist'] );
     Route::get('admin/inspection/list',[InspectionController::class,'list'] );
     Route::get('admin/inspection/add/{id}',[InspectionController::class,'add'] );
     Route::post('admin/inspection/add/{id}',[InspectionController::class, 'insert'] );
     Route::get('admin/inspection/edit/{id}',[InspectionController::class,'edit'] );
     Route::post('admin/inspection/edit/{id}',[InspectionController::class,'update'] );
     Route::get('admin/inspection/result/{id}',[InspectionController::class, 'result'] );
     Route::get('/inspection/{id}/result/pdf', [InspectionController::class, 'downloadResultAsPDF']);

     //Recomendation
     Route::get('admin/recomendation/list',[RecommendationController::class,'list'] );
     Route::get('admin/recomendationForm/list',[RecommendationController::class,'listRule'] );

});

Route::group(['middleware' => 'teacher'], function (){

    Route::get('inspector/dashboard',[DashboardController::class,'dashboard'] );
   

    Route::get('teacher/myaccount',[UserController::class, 'My_Team'] );

    Route::get('inspector/account',[UserController::class, 'MyAccount'] );
    Route::post('inspector/account',[UserController::class, 'UpdateMyAccountAdmin'] );

    Route::get('inspector/change_password',[UserController::class, 'change_password'] );
    Route::post('inspector/change_password',[UserController::class, 'update_change_password'] );


     //Register for Inspection
     
    Route::get('inspector/registration/list',[RegistrationController::class,'inspectorlist'] );
    Route::get('inspector/registration/view/{id}',[RegistrationController::class, 'inspectorview'] );
        
 //Inspection
 Route::get('inspector/inspection/compliance',[InspectionController::class,'inspectorcompliancelist'] );
 Route::get('inspector/inspection/list',[InspectionController::class,'inspectorlist'] );
 Route::get('inspector/inspection/add/{id}',[InspectionController::class,'inspectoradd'] );
 Route::post('inspector/inspection/add/{id}',[InspectionController::class, 'inspectorinsert'] );
 Route::get('inspector/inspection/edit/{id}',[InspectionController::class,'inspectoredit'] );
 Route::post('inspector/inspection/edit/{id}',[InspectionController::class,'inspectorupdate'] );
 Route::get('inspector/inspection/result/{id}',[InspectionController::class, 'inspectorresult'] );
 Route::get('/inspection/{id}/result/pdf', [InspectionController::class, 'downloadResultAsPDF']);

  //Recomendation
  Route::get('inspector/recomendation/list',[RecommendationController::class,'inspectorlist'] );
    

});

Route::group(['middleware' => 'student'], function (){

    Route::get('student/dashboard',[DashboardController::class,'dashboard'] );


    //My Account
    Route::get('student/myaccount',[UserController::class, 'My_Team'] );
    Route::get('student/account',[UserController::class, 'MyAccount'] );
    Route::post('student/account',[UserController::class, 'UpdateMyAccountStudent'] );

    

    //Register for Inspection
    Route::get('customer/registration/list',[RegistrationController::class,'list'] );
    Route::get('customer/registration/add',[RegistrationController::class,'add'] );
    Route::post('customer/registration/add',[RegistrationController::class,'insert'] );
    Route::get('customer/registration/edit/{id}',[RegistrationController::class, 'edit'] );
    Route::post('customer/registration/edit/{id}',[RegistrationController::class, 'update'] );
    Route::get('customer/registration/delete/{id}',[RegistrationController::class, 'delete'] );


    //My record
    Route::get('customer/inspection/compliance',[InspectionController::class,'customerlistcompliance'] );
    Route::get('customer/inspection/list',[InspectionController::class,'customerlist'] );
    Route::get('customer/inspection/result/{id}',[InspectionController::class, 'customerresult'] );

    
    //Certificate
    Route::get('customer/certificate/list',[CertificateController::class,'list'] );
    Route::get('customer/certificate/add',[CertificateController::class,'add'] );
    Route::post('customer/certificate/add',[CertificateController::class,'insert'] );
    Route::get('customer/registration/edit/{id}',[RegistrationController::class, 'edit'] );
    Route::post('customer/registration/edit/{id}',[RegistrationController::class, 'update'] );
    Route::get('customer/certificate/delete/{id}',[CertificateController::class, 'delete'] );

   
    Route::get('student/change_password',[UserController::class, 'change_password'] );
    Route::post('student/change_password',[UserController::class, 'update_change_password'] );


});