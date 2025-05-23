<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json([
            'success' => true,
            'message' => 'All books retrieved',
            'data' => $books
        ], 200);
    }

    public function show($id)
    {
        $book = Book::with('author')->find($id);
        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Book retrieved',
            'data' => $book
        ], 200);
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'genre_id' => 'required|exists:genres,id',
            'author_id' => 'required|exists:authors,id'
        ]);

        // Simpan
        $book = Book::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Book created',
            'data' => $book
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['success' => false, 'message' => 'Book not found'], 404);
        }

        $book->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Book updated',
            'data' => $book
        ], 200);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['success' => false, 'message' => 'Book not found'], 404);
        }

        $book->delete();
        return response()->json(['success' => true, 'message' => 'Book deleted'], 200);
    }
}
