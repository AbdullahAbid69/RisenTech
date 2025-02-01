<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Middleware\AuthCheck;
use App\Http\Middleware\LoginCheck;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('landing-page.index');
})->name('home');

// Login Routes
Route::get('/login', [LoginController::class, 'login']);
Route::post('registeruser', [LoginController::class, 'registerUser']);
Route::post('/verify-otp', [LoginController::class, 'verifyOTP'])->name('verify.otp');
Route::post('loginuser', [LoginController::class, 'loginUser'])->name('loginuser');
Route::get('logout', [LoginController::class, 'logout']);


Route::middleware("LoginCheck")->group(function(){

    Route::get('Admission_Form/personal', [AdmissionController::class, 'course']);
    Route::post('Admission_Form/personal', [AdmissionController::class, 'pl_save'])->name('pl_save');

    Route::get('Admission_Form/Education_And_Experience', [AdmissionController::class, 'eae']);
    Route::post('Admission_Form/Education_And_Experience', [AdmissionController::class, 'eae_save'])->name('eae_save');

    Route::get('Admission_Form/Guardians_Information', [AdmissionController::class, 'gi']);
    Route::post('Admission_Form/Guardians_Information', [AdmissionController::class, 'gi_save'])->name('gi_save');

    Route::get('Admission_Form/Health_Certificates', [AdmissionController::class, 'hc']);
    Route::post('Admission_Form/Health_Certificates', [AdmissionController::class, 'hc_save'])->name('hc_save');

    Route::get('Admission_Form/Documents', [AdmissionController::class, 'documents']);
    Route::post('Admission_Form/Documents', [AdmissionController::class, 'documents_save'])->name('documents_save');

    Route::get('Admission_Form/Chalan', [AdmissionController::class, 'chalan']);

});

Route::get('admin/login', [AdminController::class, 'adminLogin']);
Route::post('admin/login', [AdminController::class, 'adminLoginPost'])->name('adminLoginPost');
Route::get('admin/logout', [AdminController::class, 'adminlogout']);

Route::middleware("AuthCheck")->group(function(){
    Route::get('admin/dashboard', [AdminController::class, 'adminDashboard']);
    Route::get('admin/student/{id}', [AdminController::class, 'viewStudent'])->name('admin.student.view');
});