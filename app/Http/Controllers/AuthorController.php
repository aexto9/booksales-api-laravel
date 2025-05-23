<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::all();
        return response()->json([
            'success' => true,
            'message' => 'All authors retrieved',
            'data' => $author
        ], 200);
    }

    public function show($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['success' => false, 'message' => 'Author not found'], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Author retrieved',
            'data' => $author
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        $author = Author::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Author created',
            'data' => $author
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['success' => false, 'message' => 'Author not found'], 404);
        }

        $author->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Author updated',
            'data' => $author
        ], 200);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        if (!$author) {
            return response()->json(['success' => false, 'message' => 'Author not found'], 404);
        }

        $author->delete();
        return response()->json(['success' => true, 'message' => 'Author deleted'], 200);
    }
}
