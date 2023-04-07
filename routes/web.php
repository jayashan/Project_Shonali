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
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.home');
});
//admin page
Route::get('/admin', function () {
    return view('admin.index');
});
//teacher's page
Route::get('/teacher', function () {
    return view('pages.teacher');
});
// student page
Route::get('/student', function () {
    return view('pages.student');
});

// about us page
Route::get('/aboutus', function () {
    return view('pages.aboutus');
});

// contact us page
Route::get('/contactus', function () {
    return view('pages.contactus');
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