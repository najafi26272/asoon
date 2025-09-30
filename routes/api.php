<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\{
    Auth\AuthController,

    Dashboard\AnalyticsController,
    Dashboard\LastTaskController,
    Dashboard\NotificationController,

    User\UserController,
};
use App\Http\Middleware\Cors;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function() {
    Route::post('login', [AuthController::class, 'login'])->name('login');

    Route::middleware('auth:api')->group(function () {
        Route::get('myProfile', [AuthController::class, 'myProfile'])->name('myProfile');
        Route::post('updateMyProfile', [AuthController::class, 'updateMyProfile'])->name('updateMyProfile');
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('analytics', [AnalyticsController::class, 'index'])->name('analytics');
        Route::get('lastTask', [LastTaskController::class, 'index'])->name('lastTask');
        // Route::get('notification', [NotificationController::class, 'index'])->name('notification');
        
        Route::middleware('userAccess')->group(function () {
            Route::group(['prefix' => 'user'], function () {
                Route::get('list', [UserController::class, 'list'])->name('userList');
                Route::get('changeStatus/{id}', [UserController::class, 'changeStatus'])->name('changeUserStatus');
                Route::delete('delete', [UserController::class, 'delete'])->name('userDelete');
                Route::get('userAccess', [UserController::class, 'userAccess'])->name('userAccess');
                Route::post('updateUserAccess', [UserController::class, 'updateUserAccess'])->name('updateUserAccess');
                Route::get('userProfile', [UserController::class, 'userProfile'])->name('userProfile');
                Route::post('updateUserProfile', [UserController::class, 'updateUserProfile'])->name('updateUserProfile');
            });
        });
    });
    
});