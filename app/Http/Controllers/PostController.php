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

        // Fetch featured posts for the banner (3 posts)
        $featuredPosts = Post::orderBy('created_at', 'desc')
                            ->limit(3)
                            ->get();

        return view('posts.index', compact('trendingPosts', 'latestStories', 'dontMissOutPosts', 'featuredPosts'));
    }


    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Find the post by slug
        $post = Post::where('slug', $slug)->firstOrFail();

        // Increment the views counter
        $post->increment('views');

        // Fetch related posts by the same author, excluding the current post
        $relatedPosts = Post::where('author_id', $post->author_id)
                        ->where('id', '!=', $post->id)
                        ->limit(3)
                        ->get();

        // Fetch top posts ordered by views
        $topPosts = Post::orderBy('views', 'desc')
                        ->limit(10)
                        ->get();

        // Fetch comments for the post
        $comments = Comment::where('post_id', $post->id)->get();

        // Return the view with the fetched data
        return view('posts.post-detail', compact('post', 'relatedPosts', 'topPosts', 'comments'))
        ->with('success', session('success'));
    }


}
