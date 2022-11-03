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

Route::get('/', function () {
    return view('index');
});
Route::get('/doctors',[\App\Http\Controllers\Doctor\DoctorController::class,'list']);
Route::get('/denememe',function (){
    $doctor = \App\Models\Doctor::find(1);
    $doctor->medicine_field_id = \App\Models\MedicineField::find(1)->id;
    $doctor->save();
    return \App\Models\Doctor::find(1)->field()->name;
});

Route::name('patient.')->prefix('patient')->group( function (){
    Route::middleware('is_patient')->group(function (){
        Route::get('dashboard',[\App\Http\Controllers\Patient\DashboardController::class,'index'])->name('dashboard');
        Route::post('dashboard',[\App\Http\Controllers\Patient\DashboardController::class,'FinishOnboard']);
        Route::get('dashboard/bookings',[\App\Http\Controllers\Patient\DashboardController::class,'bookings']);
        Route::get('dashboard/edit-profile',[\App\Http\Controllers\Patient\DashboardController::class,'profile_edit'])->name('profile-edit');
        Route::post('dashboard/edit-profile',[\App\Http\Controllers\Patient\DashboardController::class,'profile_save']);
        Route::get('dashboard/messages/',[\App\Http\Controllers\Patient\DashboardController::class,'Messages'])->name('messages');
        Route::get('dashboard/message/{id}',[\App\Http\Controllers\Patient\DashboardController::class,'ShowInbox']);
        Route::post('dashboard/message/{id}',[\App\Http\Controllers\Patient\DashboardController::class,'SendMessage']);

        Route::post('logout', [\App\Http\Controllers\Patient\AuthController::class, 'destroy'])->name('logout');
    });
    Route::get('register',[\App\Http\Controllers\Patient\AuthController::class,'register']);
    Route::post('register',[\App\Http\Controllers\Patient\AuthController::class,'store'])->name('register');
    Route::get('login',[\App\Http\Controllers\Patient\AuthController::class,'login'])->name('login');

});

Route::get('messages/{id}',function ($id){
    return \App\Models\Message::all()->find($id)->GetSender();
});
Route::name('doctor.')->prefix('doctor')->group( function (){
    Route::middleware('is_doctor')->group(function (){
        Route::get('dashboard',[\App\Http\Controllers\Doctor\DashboardController::class,'index'])->name('dashboard');
        Route::get('/dashboard/blogs',[\App\Http\Controllers\BlogController::class,'list'])->name('blogs');
        Route::get('/dashboard/blogs/add',[\App\Http\Controllers\BlogController::class,'create']);
        Route::post('/dashboard/blogs/add',[\App\Http\Controllers\BlogController::class,'store'])->name('add-blog');
        Route::get('/dashboard/blogs/{id}',[\App\Http\Controllers\BlogController::class,'index']);
        Route::get('/dashboard/blogs/edit/{id}',[\App\Http\Controllers\BlogController::class,'edit']);
        Route::post('/dashboard/blogs/edit/{id}',[\App\Http\Controllers\BlogController::class,'update'])->name('update-blog');
        Route::get('/dashboard/blogs/delete/{id}',[\App\Http\Controllers\BlogController::class,'destroy'])->name('delete-blog');




        Route::post('logout', [\App\Http\Controllers\Doctor\AuthController::class, 'destroy'])->name('logout');
        Route::get('dashboard/edit-profile',[\App\Http\Controllers\Doctor\DashboardController::class,'profile_edit'])->name('profile-edit');
        Route::post('dashboard/edit-profile',[\App\Http\Controllers\Doctor\DashboardController::class,'profile_save']);
        Route::get('dashboard/bookings',[\App\Http\Controllers\Doctor\DashboardController::class,'bookings'])->name('bookings');
        Route::get('dashboard/messages/',[\App\Http\Controllers\Doctor\DashboardController::class,'Messages'])->name('messages');
        Route::get('dashboard/reviews/',[\App\Http\Controllers\Doctor\DashboardController::class,'Reviews'])->name('reviews');
        Route::get('dashboard/message/{id}',[\App\Http\Controllers\Doctor\DashboardController::class,'ShowInbox']);
        Route::post('dashboard/message/{id}',[\App\Http\Controllers\Doctor\DashboardController::class,'SendMessage']);
        Route::post('logout', [\App\Http\Controllers\Doctor\AuthController::class, 'destroy'])->name('logout');

    });
    Route::get('login',[\App\Http\Controllers\Doctor\AuthController::class,'login'])->name('login');
    Route::get('register',[\App\Http\Controllers\Doctor\AuthController::class,'register']);
    Route::post('register',[\App\Http\Controllers\Doctor\AuthController::class,'store'])->name('register');
    Route::get('{username}',[\App\Http\Controllers\Doctor\DoctorController::class,'index']);
    Route::get('{username}/book-now',[\App\Http\Controllers\AppointmentController::class,'BookNowWithDetails'])->name('book-now');
    Route::post('{username}/book-now',[\App\Http\Controllers\AppointmentController::class,'BookNowWithDetailsPost']);
    Route::post('{username}/book',[\App\Http\Controllers\AppointmentController::class,'Create'])->name('book');

});
Route::get('/login/doctor',[\App\Http\Controllers\Doctor\AuthController::class,'login'])->name('doctor');
Route::post('/login/patient',[\App\Http\Controllers\Patient\AuthController::class,'authenticate'])->name('patient-login');
Route::post('/login/doctor',[\App\Http\Controllers\Doctor\AuthController::class,'authenticate'])->name('doctor-login');
Route::get('/register/doctor',[\App\Http\Controllers\Doctor\AuthController::class,'register']);
Route::post('/register/doctor',[\App\Http\Controllers\Doctor\AuthController::class,'store'])->name('doctor-register');
Route::get('/register/patient',[\App\Http\Controllers\Patient\AuthController::class,'register']);
Route::post('/register/patient',[\App\Http\Controllers\Patient\AuthController::class,'store'])->name('patient-register');
require __DIR__.'/auth.php';
