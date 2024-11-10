<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::get('/test', function() {
    return ["name" => "mubashir", "job" => "freelancing"];
});

Route::get('student', [StudentController::class,'list']);

Route::post('add-student', [StudentController::class,'addStudent']);

Route::put('update-student', [StudentController::class, 'updateStudent']);

Route::delete('delete-student/{id}', [StudentController::class, 'deleteStudent']);

Route::get('search-student/{name}', [StudentController::class, 'searchStudent']);
