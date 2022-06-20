<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function addNodeView(){
        return view('add-node');
    }

    public function editNodeView($name, $id){
        return view('edit-node', compact('name', 'id'));
    }

    public function moveNodeView($id){
        return view('move-node', compact('id'));
    }
}
