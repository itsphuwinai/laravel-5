<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'success' => true,
            'data' => $authors
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'bio' => 'required|string',
        ]);

        $author = Author::create($request->only('name', 'photo', 'bio'));

        return response()->json([
            'success' => true,
            'data' => $author
        ], 201);
    }

    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author not found.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $author
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author not found.'
            ], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|string|max:255',
            'bio' => 'required|string',
        ]);

        $author->update($request->only('name', 'photo', 'bio'));

        return response()->json([
            'success' => true,
            'data' => $author
        ], 200);
    }

    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'success' => false,
                'message' => 'Author not found.'
            ], 404);
        }

        $author->delete();

        return response()->json([
            'success' => true,
            'message' => 'Author deleted'
        ], 200);
    }
}
