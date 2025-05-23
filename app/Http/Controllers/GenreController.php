<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            'message' => 'All genres retrieved',
            'data' => $genres
        ], 200);
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['success' => false, 'message' => 'Genre not found'], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Genre retrieved',
            'data' => $genre
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        $genre = Genre::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Genre created',
            'data' => $genre
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['success' => false, 'message' => 'Genre not found'], 404);
        }

        $genre->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Genre updated',
            'data' => $genre
        ], 200);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        if (!$genre) {
            return response()->json(['success' => false, 'message' => 'Genre not found'], 404);
        }

        $genre->delete();
        return response()->json(['success' => true, 'message' => 'Genre deleted'], 200);
    }
}
