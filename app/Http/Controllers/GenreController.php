<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    // Get all genres
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'success' => true,
            'data' => $genres
        ], 200);
    }

    // Create a new genre
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $genre = Genre::create($request->only(['name', 'description']));

        return response()->json([
            'success' => true,
            'data' => $genre
        ], 201);
    }

    // Get one genre by ID
    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => $genre
        ], 200);
    }

    // Update genre by ID
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->update($request->only(['name', 'description']));

        return response()->json([
            'success' => true,
            'data' => $genre
        ], 200);
    }

    // Delete genre by ID
    public function destroy($id)
    {
        Genre::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Genre deleted'
        ], 200);
    }
}
