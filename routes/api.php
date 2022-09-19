<?php

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\GuestController;
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


//Admin
Route::group(['middleware' => 'auth:sanctum'], function () {

    //Admin Control
    Route::get('/admin/guest', [AdminController::class, 'show']);
    Route::get('/admin/guest/{id}', [AdminController::class, 'showById']);
    Route::put('/admin/guest/{id}', [AdminController::class, 'update']);
    Route::delete('/admin/guest/{id}', [AdminController::class, 'delete']);

    //Logout Admin
    Route::get('/admin/logout', [AuthController::class, 'logout']);
});
//Auth admin
Route::post('/admin/register', [AuthController::class, 'register']);
Route::post('/admin/login', [AuthController::class, 'login']);


//Guests
Route::get('/guest', [GuestController::class, 'show']);
Route::post('/guest', [GuestController::class, 'create']);
