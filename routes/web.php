<?php

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

Route::get('/', function () {
    return redirect('login');
});

Route::middleware('auth::api')
    ->get('/user', function (Request $request) {
        return $request->user();
    });

Auth::guard('api')->user(); // instance of the logged user
Auth::guard('api')->check(); // if a user is authenticated
Auth::guard('api')->id(); // the id of the authenticated user

Route::post('register', 'Auth\RegisterController@register');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth::api'], function() {
    Route::get('tree', 'TreeController@index');
    Route::get('nodes/{node}', 'TreeController@showNode');
    Route::get('leafes/{leaf}', 'TreeController@showLeaf');
    Route::post('nodes', 'TreeController@storeNode');
    Route::post('leafes', 'TreeController@storeLeaf');
    Route::put('nodes/{node}', 'TreeController@updateNode');
    Route::put('leafes/{leaf}', 'TreeController@updateLeaf');
    Route::delete('nodes/{node}', 'TreeController@deleteNode');
    Route::delete('leafes/{leaf}', 'TreeController@deleteLeaf');
});