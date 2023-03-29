<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
Route::get('employee',[EmployeeController::class,'index']);
Route::post('add-employee',[EmployeeController::class,'store']);
Route::get('find-employee/{id}',[EmployeeController::class,'show']);
Route::patch('update-employee/{id}',[EmployeeController::class,'update']);
Route::delete('delete-employee/{id}',[EmployeeController::class,'destroy']);

//API for users
