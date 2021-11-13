<?php

use App\Http\Controllers\API\BlogApiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//api
$routeAuth = function () {
    Route::post('/blog', [BlogApiController::class, 'store']);
    Route::put('/blog/{blog:id}', [BlogApiController::class, 'update']);
    Route::delete('/blog/{blog:id}', [BlogApiController::class, 'destroy']);
};
$routePublic = function () {

};
Route::middleware("auth")->prefix("web-api/auth")->group($routeAuth);
Route::prefix("web-api")->group($routePublic);

//auth route

//public route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{user}', [UserController::class, 'show']);
