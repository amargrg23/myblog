<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return response()->json([
            'data' => $posts,
            'message' => 'Posts retrieved successfully'
        ], 200);
    }

    public function show($id)
{
    // Find the post by ID
    $post = Post::findOrFail($id);

    // Return the post data
    return response()->json([
        'data' => $post,
        'message' => 'Post retrieved successfully'
    ], 200);
}


}