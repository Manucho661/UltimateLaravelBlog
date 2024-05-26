<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("catagories.index", compact("categories"));
    }


    /**
     * Display the specified resource.
     */
    public function show( $slug)
    {
        $category = Category::with('posts')->whereSlug($slug)->firstOrFail();
        return view('category.posts', compact('category'));
    }

}
