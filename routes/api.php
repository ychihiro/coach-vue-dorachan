<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\EvalueationController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MailController;
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
    'store','show', 'index'
]));

Route::apiResource('/v1/like', LikeController::class)->only(([
    'index','show', 'store' , 'destroy'
]));

Route::apiResource('/v1/diagnosis', DiagnosisController::class)->only(([
    'index', 'store'
]));

Route::apiResource('/v1/question', QuestionController::class)->only(([
    'store', 'index', 'show'
]));

Route::apiResource('/v1/purchase', PurchaseController::class)->only(([
    'index'
]));
Route::get('/v1/purchase/{id}', [PurchaseController::class, 'product']);
Route::post('/v1/evalueation', [EvalueationController::class, 'store']);
Route::post('/v1/result', [ResultController::class, 'store']);
Route::post('/v1/payment', [PaymentController::class, 'payment']);
Route::post('/v1/mail', [MailController::class, 'send']);


// Route::get('/v1/like/{id}', [DiagnosisController::class, 'check']);