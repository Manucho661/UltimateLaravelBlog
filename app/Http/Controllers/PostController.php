<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch trending posts (top 5 by views)
        $trendingPosts = Post::orderBy('views', 'desc')
                             ->limit(5)
                             ->get();

        // Fetch latest stories (latest 5 posts)
        $latestStories = Post::orderBy('created_at', 'desc')
                             ->limit(5)
                             ->get();

        // Fetch 'Don't Miss Out' posts
        // This can be defined as posts with both high views and recent creation dates,
        // or you can customize this as needed
        $dontMissOutPosts = Post::orderBy('views', 'desc')
                                ->orderBy('created_at', 'desc')
                                ->limit(5)
                                ->get();

        return view('posts.index', compact('trendingPosts', 'latestStories', 'dontMissOutPosts'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        // Increment the views counter
        $post->increment('views');

        $relatedPosts = Post::where('author_id', $post->author_id)
                            ->where('id', '!=', $id)
                            ->limit(3)
                            ->get();

        // Fetch top posts ordered by views
        $topPosts = Post::orderBy('views', 'desc')
                        ->limit(10)
                        ->get();

        $comments = Comment::where('post_id', $id)->get();
        return view('posts.post-detail', compact('post', 'relatedPosts', 'topPosts', 'comments'));
    }

}
