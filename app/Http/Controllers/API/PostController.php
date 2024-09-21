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
        $posts = Auth::user()->posts;
        return response()->json([
            'data' => $posts,
            'message' => 'Posts retrieved successfully'
        ], 200);
    }

    public function show(Post $post)
    {
        if ($post->user_id != Auth::id()) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 403);
        }

        return response()->json([
            'data' => $post,
            'message' => 'Post retrieved successfully'
        ], 200);
    }
}