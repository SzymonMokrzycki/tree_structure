<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Node;
use App\Models\Lef;

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

Route::get('allnodes', function () {
    return Node::all();
});

Route::get('nodes/{id}', function($id) {
    return Node::find($id);
});

Route::post('nodescreate', function(Request $request) {
    return Node::create($request->all);
});

Route::post('nodes/{id}', function(Request $request, $id) {
    $node = Node::findOrFail($id);
    $node->update($request->all());

    return redirect("/home");
});

Route::delete('nodes/delete/{id}', function($id) {
    Node::find($id)->delete();

    return 204;
});

Route::get('sortup', function (){
    Node::orderBy('name', 'ASC');
    return redirect('/home');
});

Route::get('sortdown', function (){
    Node::orderBy('name', 'DESC');
    return redirect('/home');
});


