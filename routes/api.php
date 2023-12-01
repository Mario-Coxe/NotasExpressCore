<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamUserController;

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




Route::get('/users/{userId}/teams', [TeamUserController::class, 'edit']);
Route::get('/teams/{teamId}/courses', [TeamUserController::class, 'getTeamCourses']);
Route::get('/courses-for-current-user', [TeamUserController::class, 'getTeamCoursesForCurrentUser']);