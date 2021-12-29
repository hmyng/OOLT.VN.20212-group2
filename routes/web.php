<?php

use App\Http\Controllers\API\BlogApiController;
use App\Http\Controllers\API\CommentApiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
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
//
$routeAuth = function () {
    Route::post('/blog', [BlogApiController::class, 'store']);
    Route::put('/blog/{blog:id}', [BlogApiController::class, 'update']);
    Route::delete('/blog/{blog:id}', [BlogApiController::class, 'destroy']);
    Route::post('/blog/{blog:id}', [BlogApiController::class, 'likeBlog']);
    Route::post('/comment', [CommentApiController::class, 'store']);
    Route::put('/comment/{comment}', [CommentApiController::class, 'update']);
    Route::delete('/comment/{comment}', [CommentApiController::class, 'destroy']);
};

// /web-api/blog
$routePublic = function () {
    Route::post('/blog', [BlogApiController::class, 'store']);
    Route::put('/blog/{blog:id}', [BlogApiController::class, 'update']);
};
Route::middleware("auth")->prefix("web-api/auth")->group($routeAuth);
Route::prefix("web-api")->group($routePublic);

//auth route
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);
//public route

// Route::get('/', function () {

//     return view('welcome');
// });

Route::get('/home', [BlogController::class,'index'])->name('home');

Route::get('/profile/{user}', [UserController::class, 'show']);
