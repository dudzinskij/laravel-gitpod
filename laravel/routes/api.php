<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// CREATE
Route::post('employees', 'API\EmployeeController@store');

// READ All employees
Route::get('employees', 'API\EmployeeController@index');
// READ Single employee
Route::get('employees/{id}', 'API\EmployeeController@show');

// UPDATE
Route::put('employees/{id}', 'API\EmployeeController@update');

// DELETE
Route::delete('employees/{id}', 'API\EmployeeController@destroy');

