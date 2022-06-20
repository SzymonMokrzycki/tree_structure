<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return redirect('/login');
});

Route::get('allnodes', 'TreeController@index');
Route::get('nodes/{node}', 'TreeController@showNode');
Route::post('nodescreate', [App\Http\Controllers\TreeController::class, 'storeNode'])->name('create.node');
Route::post('nodes/{node}', [App\Http\Controllers\TreeController::class, 'updateNode']);
Route::post('nodes/move/{node}', [App\Http\Controllers\TreeController::class, 'moveNode']);
Route::delete('nodes/delete/{node}', [App\Http\Controllers\TreeController::class, 'deleteNode']);
Route::get('sortup', [App\Http\Controllers\TreeController::class, 'sortUp'])->name('sort.up');
Route::get('sortdown', [App\Http\Controllers\TreeController::class, 'sortDown'])->name('sort.down');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addnodeview', [App\Http\Controllers\HomeController::class, 'addNodeView'])->name('addNode');
Route::get('/editnodeview/{name}/{id}', [App\Http\Controllers\HomeController::class, 'editNodeView'])->name('editNode');
Route::get('/movenodeview/{id}', [App\Http\Controllers\HomeController::class, 'moveNodeView'])->name('moveNode');;
