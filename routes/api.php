<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\API\EmployeeController;
use App\Http\Controllers\Backend\API\EmployeeDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('employees/get-countries', [EmployeeDataController::class, 'getCountries']);
Route::get('employees/{country}/get-states', [EmployeeDataController::class, 'getStates']);
Route::get('employees/{state}/get-cities', [EmployeeDataController::class, 'getCities']);
Route::get('employees/get-departments', [EmployeeDataController::class, 'getDepartments']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::get('/employees', [EmployeeController::class, 'index']);
Route::delete('/employee/{employee}', [EmployeeController::class, 'destroy']);
Route::get('/get-employee-data/{employee}', [EmployeeController::class, 'getEmployee']);
Route::put('/update-employee/{employee}', [EmployeeController::class, 'update']);