<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MarksController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GadgetsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API for employee 
Route::get('employee', [EmployeeController::class, 'index']);
Route::post('add-employee', [EmployeeController::class, 'store']);
Route::get('find-employee/{id}', [EmployeeController::class, 'show']);
Route::patch('update-employee/{id}', [EmployeeController::class, 'update']);
Route::delete('delete-employee/{id}', [EmployeeController::class, 'destroy']);
Route::get('employee-gadgets/{id}', [EmployeeController::class, 'employee_with_gadgets']);
Route::get('employees-gadgets', [EmployeeController::class,'employees_with_gadgets']);

//API for students
Route::get('index-students', [StudentController::class, 'index']);
Route::post('add', [StudentController::class, 'store']);
Route::get('student_with_marks/{id}', [StudentController::class, 'student_with_marks']);
Route::get('students_with_marks', [StudentController::class, 'students_with_marks']);

//API for marks
Route::get('index-marks', [MarksController::class, 'index']);
Route::post('add-marks', [MarksController::class, 'add']);


//API for Emloyee gadgets
Route::get('index-gadgets',[GadgetsController::class,'index']);
Route::post('add-gadget', [GadgetsController::class, 'create']);
Route::patch('update-gadget/{id}',[GadgetsController::class,'update']);
Route::delete('delete-gadget/{id}',[GadgetsController::class,'delete']);
