<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('comments')->orderBy("created_at","desc")->paginate(10);
        return view("posts.index", compact("posts"));
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        return view("posts.post-detail", compact("post"));
    }

}
