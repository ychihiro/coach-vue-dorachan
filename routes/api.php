<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\QuestionController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/v1/user', UserController::class)->only(([
    'store','show'
]));

Route::apiResource('/v1/diagnosis', DiagnosisController::class)->only(([
    'index'
]));

Route::apiResource('/v1/question', QuestionController::class)->only(([
    'index'
]));
