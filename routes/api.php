<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\api\AuthController;
 use App\Http\Controllers\admin\api\SOSController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'getUser']);
    Route::post('/update-profile', [AuthController::class, 'update_profile']);
    Route::post('/upload-profile-pic', [AuthController::class, 'upload_profile_pic']);

        Route::get('sos', [SOSController::class, 'index']);
        Route::post('sos/store', [SOSController::class, 'store']);
        Route::get('sos/edit/{id}', [SOSController::class, 'show']);
        Route::post('sos/update/{id}', [SOSController::class, 'update']);
        Route::get('sos/delete/{id}', [SOSController::class, 'destroy']);
        Route::get('/regions', [SOSController::class, 'regionData']);

});
