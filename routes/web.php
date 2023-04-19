<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LecturesController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AttendancesController;
use App\Http\Controllers\ClassRoomsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StsparentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\SfeesController;
use App\Http\Controllers\FeedetailsController;
use App\Http\Controllers\ClassdetailsController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\EnquiriesController;
use App\Http\Controllers\AddattendancesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JoinusController;
use App\Http\Controllers\AddexamsController;
use App\Http\Controllers\AddlessonsController;
use App\Http\Controllers\EntermarksController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});


//admin page
// Route::get('/admin', function () {
//     return view('admin.index');
// });
//teacher's page
Route::get('/teacher', function () {
    return view('admin.teacher');
});
// student page
// Route::get('/student', function () {
//     return view('pages.student');
// });

// about us page
Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

// // contact us page
// Route::get('/contactus', function () {
//     return view('pages.contactus');
// });

// join us us page
Route::get('/joinus', function () {
    return view('pages.joinus');
});

// join us admission 
Route::get('/admission', function () {
    return view('pages.admission');
});




// class (admin) page
Route::get('/class', function () {
    return view('admin.class');
});

// subjects (admin) page
Route::get('/subject', function () {
    return view('admin.subject');
});


// employee (admin) page
Route::get('/employee', function () {
    return view('admin.employee');
});

// fee (admin) page
Route::get('/fee', function () {
    return view('admin.fee');
});


// salary (admin) page
Route::get('/salary', function () {
    return view('admin.salary');
});


// attendance (admin) page
Route::get('/attendance', function () {
    return view('admin.attendance');
});

// timetable (admin) page
Route::get('/timetable', function () {
    return view('admin.timetable');
});


// exam (admin) page
Route::get('/exam', function () {
    return view('admin.exam');
});


//report (admin) page
Route::get('/report', function () {
    return view('admin.report');
});
// Route::get('/staff', function () {
//     return view('admin.staff');
// });

Route::get('/students', function () {
  return view('admin.student');
});

Route::get('/subjects', function () {
    return view('admin.subjects');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout'); 


Route::resource('lectures',LecturesController::class);
Route::resource('students',StudentsController::class);
Route::resource('stsparents',StsparentsController::class);
Route::resource('attendances',AttendancesController::class);
Route::resource('classrooms',ClassRoomsController::class);
Route::resource('subjects',SubjectController::class);
Route::resource('employees',EmployeesController::class);
Route::resource('enrollments',EnrollmentsController::class);
Route::resource('sfees',SfeesController::class);
Route::resource('feedetails',FeedetailsController::class);
Route::resource('classdetails',ClassdetailsController::class);
Route::resource('exams',ExamsController::class);
Route::resource('enquiries',EnquiriesController::class);
Route::resource('addattendances',AddattendancesController::class);
Route::resource('addexams',AddexamsController::class);
Route::resource('addlessons',AddlessonsController::class);
Route::resource('entermarks',EntermarksController::class);



Route::get('admin',[AdminHomeController::class,'Index']);


Route::get('contact-us', [ContactController::class, 'index']);
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');


Route::get('join-us', [JoinusController::class, 'index']);
Route::post('join-us', [JoinusController::class, 'store'])->name('join.us.store');