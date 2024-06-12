<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\ProductController@index');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

        // Route::GET('/dashboard', 'App\Http\Controllers\ProductController@view');


});

//route
Route::get('/about', function () {
    return view('about');
});


Route::GET('edit/{id}', 'App\Http\Controllers\ProductController@edit');

Route::put('update/{id}', 'App\Http\Controllers\ProductController@update');


//delete
Route::delete('destroy/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::GET('creste', 'App\Http\Controllers\ProductController@viewproducts');

Route::GET('/edee', 'App\Http\Controllers\ProductController@editsave');
Route::POST('/edee', 'App\Http\Controllers\ProductController@editsave');

Route::GET('/create', 'App\Http\Controllers\ProductController@ccc');


//user
Route::get('users', 'App\Http\Controllers\UserController@users');
Route::get('view-user/{id}', 'App\Http\Controllers\UserController@viewUser');
Route::get('edit-user/{id}', 'App\Http\Controllers\UserController@editUser');
Route::get('edituser/{id}', 'App\Http\Controllers\UserController@updateUser');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/deleteuser/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::GET('/createuser', 'App\Http\Controllers\UserController@create');

Route::post('/userstore', [UserController::class, 'store']);


Route::get('/admin', 'App\Http\Controllers\DashboardController@view');


Route::GET('/store', 'App\Http\Controllers\ProductController@create');
Route::POST('/store', 'App\Http\Controllers\ProductController@create');
