<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Node;
use App\Models\Leaf;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tree', function () {
    return Node::all();
    return Leaf::all();
});
