<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Resources\User as UserResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', 'UsersController@index');
Route::get('/users/{$id}', 'UsersController@show');
Route::post('/users', 'UsersController@store');
Route::get('/books', 'BookController@index');


Route::get('/home', 'HomeController@index')->name('home');


Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::middleware('auth:api')->group(function() {
    
    Route::get('user/{userId}/detail', 'UserController@show');
});


// Route::post('/users',)

// Route::group([
//     'prefix' => 'auth'
// ], function () {
//     Route::post('login', 'AuthController@login');
//     Route::post('signup', 'AuthController@signup');
  
//     Route::group([
//       'middleware' => 'auth:api'
//     ], function() {
//         Route::get('logout', 'AuthController@logout');
//         Route::get('user', 'AuthController@user');
//     });
// });