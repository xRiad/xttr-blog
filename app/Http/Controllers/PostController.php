<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        
        $post = PostModel::with('tags', 'comments')->findOrFail($id);
        $tagIds=$post->tags->pluck('id');
        $categoryId = $post->category_id;

        $relatedPosts = PostModel::whereHas('tags',function ($query) use($tagIds, $id) {
            $query->whereIn('tag_id',$tagIds);
        })->whereHas('categories', function ($query) use($categoryId) {
            $query->where('id','=',$categoryId);
        })->where('id', '!=', $id)->get();

        $categories = CategoryModel::all();


        $post->views += 1;
        $post->save();

        return view('post', ['post' => $post, 'categories' => $categories, 'relatedPosts' => $relatedPosts]); }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
