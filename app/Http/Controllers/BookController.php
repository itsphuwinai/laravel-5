<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Get all books with their genre and author info
    public function index()
    {
        $books = Book::with(['genre', 'author'])->get();
        return response()->json([
            'success' => true,
            'data' => $books
        ], 200);
    }

    // Create a new book record
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $book
        ], 201);
    }

    // Show one book by ID, include genre and author
    public function show($id)
    {
        $book = Book::with(['genre', 'author'])->findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => $book
        ], 200);
    }

    // Update a book by ID
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $book
        ], 200);
    }

    // Delete a book by ID
    public function destroy($id)
    {
        Book::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Book deleted'
        ], 200);
    }
}
