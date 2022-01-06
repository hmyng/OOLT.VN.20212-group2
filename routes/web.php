<?php

use App\Http\Controllers\API\BlogApiController;
use App\Http\Controllers\API\CommentApiController;
use App\Http\Controllers\API\UserApiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
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
    Route::post('/comment', [CommentApiController::class, 'store']);
    Route::put('/comment/{comment}', [CommentApiController::class, 'update']);
    Route::delete('/comment/{comment}', [CommentApiController::class, 'destroy']);
    Route::post('/like/{blog}', [BlogApiController::class, 'likeBlog']);
    Route::post('/follow/{user}', [UserApiController::class, 'follow']);
};

// /web-api/blog
$routePublic = function () {
//    Route::post('/blog', [BlogApiController::class, 'store']);
//    Route::put('/blog/{blog:id}', [BlogApiController::class, 'update']);
};
Route::middleware("auth")->prefix("web-api/auth")->group($routeAuth);
Route::prefix("web-api")->group($routePublic);

//auth route
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

//login
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


//logout
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
//public route

Route::get('/search', [SearchController::class, 'index']);
Route::post('/search', [SearchController::class, 'store'])->name('search');

Route::get('/home', [BlogController::class,'index'])->name('home');

Route::get('/post',
    [PostController::class, 'index']
);
Route::get('/user', function () {
    return view('frontend.user');
});
Route::get('/user-post', function () {
    return view('frontend.post_a_status');
});

Route::get('/new-post', function () {
    return view('frontend.new-post');
});
Route::get('/home', [BlogController::class,'index']);



Route::get('/profile/{user}', [UserController::class, 'show']);
