<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\RepaymentController;

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

Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
   // Route::resource('posts', PostController::class);
   Route::post('posts', [PostController::class, 'store']);
   Route::get('posts/{id}', [PostController::class, 'show']);
   Route::get('allposts', [PostController::class, 'index']);
   // Loan 
   Route::post('loans', [LoanController::class, 'store']);
   Route::post('loans/{id}', [LoanController::class, 'update']); // update
   Route::get('loans', [LoanController::class, 'index']); // Show Loan
   // Repayment
   Route::post('repayment/{loanid}', [RepaymentController::class, 'store']);
   
});