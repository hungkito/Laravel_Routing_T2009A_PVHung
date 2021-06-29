<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\UserController;
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

Route::get('/user/dang-ki', [UserController::class, 'dangki']);
Route::get('/user/login', [UserController::class, 'login']);
Route::post('/user/dang-ki', [UserController::class, 'xulidangki']);
Route::get('/user/getUserDetail', [UserController::class, 'getUserDetail']);
Route::get('/user/dang-ki-khach-hang', [UserController::class, 'dangKiKhachHang']);
Route::post('/user/dang-ki-khach-hang', [UserController::class, 'showInformation']);

Route:: get('/admin/student/create', [\App\Http\Controllers\StudentCotroller::class,'create']);
Route:: get('/admin/student/list', [\App\Http\Controllers\StudentCotroller::class,'getList']);
Route:: get('/admin/student/detail', [\App\Http\Controllers\StudentCotroller::class,'getById']);
Route:: get('/admin/student/update', [\App\Http\Controllers\StudentCotroller::class,'update']);
Route:: get('/admin/student/delete', [\App\Http\Controllers\StudentCotroller::class,'delete']);
Route:: get('/admin/student/view', [\App\Http\Controllers\StudentCotroller::class,'view']);




Route:: get('/admin/teacher/create', [\App\Http\Controllers\TeacherController::class,'create']);
Route:: get('/admin/teacher/list', [\App\Http\Controllers\TeacherController::class,'getList']);
Route:: get('/admin/teacher/detail', [\App\Http\Controllers\TeacherController::class,'getById']);
Route:: get('/admin/teacher/update', [\App\Http\Controllers\TeacherController::class,'update']);
Route:: get('/admin/teacher/delete', [\App\Http\Controllers\TeacherController::class,'delete']);
Route:: get('/admin/teacher/view', [\App\Http\Controllers\TeacherController::class,'view']);

Route::get('/demo.page1', [LayoutController::class, 'page1']);
Route::get('/demo.page2', [LayoutController::class, 'page2']);
Route::get('/demo.page3', [LayoutController::class, 'page3']);
