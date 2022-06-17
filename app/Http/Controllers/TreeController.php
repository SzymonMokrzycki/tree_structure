<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreeController extends Controller
{
    public function index()
    {
        return Node::all();
        return Leaf::all();
    }
 
    public function showNode($id)
    {
        return Node::find($id);
    }

    public function showLeaf($id)
    {
        return Leaf::find($id);
    }

    public function storeNode(Request $request)
    {
        return Node::create($request->all());
    }

    public function storeLeaf(Request $request)
    {
        return Leaf::create($request->all());
    }

    public function updateNode(Request $request, $id)
    {
        $node = Node::findOrFail($id);
        $node->update($request->all());

        return $node;
    }

    public function updateLeaf(Request $request, $id)
    {
        $leaf = Leaf::findOrFail($id);
        $leaf->update($request->all());

        return $leaf;
    }

    public function deleteNode(Request $request, $id)
    {
        $node = Node::findOrFail($id);
        $node->delete();

        return 204;
    }

    public function deleteLeaf(Request $request, $id)
    {
        $leaf = Leaf::findOrFail($id);
        $leaf->delete();

        return 204;
    }
}
