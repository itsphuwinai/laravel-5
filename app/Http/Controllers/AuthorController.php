<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // List all authors
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'success' => true,
            'data' => $authors
        ], 200);
    }

    // Add a new author
    public function store(Request $request)
    {
        $author = Author::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $author
        ], 201);
    }

    // Get one author by ID
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => $author
        ], 200);
    }

    // Update author by ID
    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return response()->json([
            'success' => true,
            'data' => $author
        ], 200);
    }

    // Delete author by ID
    public function destroy($id)
    {
        Author::destroy($id);
        return response()->json([
            'success' => true,
            'message' => 'Author deleted'
        ], 200);
    }
}
