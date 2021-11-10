<?php

use App\Http\Controllers\AdminController;
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

Route::view('/', 'Main.index');
Route::view('/login', 'Main.login');
Route::view('/register', 'Main.register');

// Admin Routes Are Here
Route::view('/admin-portal', 'Admin.login');
Route::post('adminlogin', [AdminController::class, 'signin'])->name('adminlogin');
Route::group(['middleware' => 'Admin'], function () {
    Route::view('/dashboard','Admin.dashboard')->name('dashboard');
    Route::view('/courses','Admin.courses')->name('courses');
    Route::view('/teachers','Admin.teachers')->name('teachers');
    Route::view('/students','Admin.students')->name('students');
    Route::view('/class','Admin.classes')->name('class');
    Route::get('/admin-logout', [AdminController::class, 'Logoutadmin'])->name('admin-logout');
});

Route::view('/teacher-portal', 'Teacher.login');

// Route::view('/All-Students','Admin.students')->name('all-students');
// Route::post('adminlogin', [AdminController::class, 'signin'])->name('adminlogin');
// Route::group(['middleware' => 'Admin'], function () {
//     Route::view('/dashboard','Admin.courses')->name('courses');
//     Route::view('/teachers','Admin.teachers')->name('teachers');
//     Route::view('/students','Admin.students')->name('students');
//     Route::get('/admin-logout', [AdminController::class, 'Logoutadmin'])->name('admin-logout');
// });
