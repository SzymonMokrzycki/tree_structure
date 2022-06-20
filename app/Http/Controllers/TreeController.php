<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Node;
use App\Models\Lef;

class TreeController extends Controller
{
    public function index()
    {
        return Node::all();
    }

    public function sortUp()
    {
        Node::orderBy('name', 'ASC');
        return redirect('/home');
    }

    public function sortDown()
    {
        Node::orderBy('name', 'DESC');
        return redirect('/home');
    }

    public function showNode($id)
    {
        return Node::find($id);
    }

    public function storeNode(Request $request)
    {
        Node::create($request->all());
        return redirect('/home');
    }

    public function updateNode(Request $request, $id)
    {
        $node = Node::findOrFail($id);
        $node->update($request->all());

        return redirect('/home');
    }

    public function deleteNode(Request $request, $id)
    {
        $node = Node::findOrFail($id);
        $node->delete();

        return 204;
    }
}
