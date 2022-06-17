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

Route::get('nodes/{id}', function($id) {
    return Node::find($id);
});

Route::get('leafes/{id}', function($id) {
    return Leaf::find($id);
});

Route::post('nodes', function(Request $request) {
    return Node::create($request->all);
});

Route::post('leafes', function(Request $request) {
    return Leaf::create($request->all);
});

Route::put('nodes/{id}', function(Request $request, $id) {
    $node = Node::findOrFail($id);
    $node->update($request->all());

    return $node;
});

Route::put('leafes/{id}', function(Request $request, $id) {
    $leaf = Leaf::findOrFail($id);
    $leaf->update($request->all());

    return $leaf;
});

Route::delete('nodes/{id}', function($id) {
    Node::find($id)->delete();

    return 204;
});

Route::delete('leafes/{id}', function($id) {
    Leaf::find($id)->delete();

    return 204;
});