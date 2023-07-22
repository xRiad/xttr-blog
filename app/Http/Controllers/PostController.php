<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;


class PostController extends Controller
{
    /**
     * display a listing of the resource.
     */
    public function index()
    {
      
    }

    /**
     * show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * store a newly created resource in storage.
     */
    public function store(request $request)
    {
        //
    }

    /**
     * display the specified resource.
     */
    public function show(int $id)
    {
        $post = PostModel::with('tags', 'comments')->findOrFail($id);
        $tagids=$post->tags->pluck('id');
        $categoryid = $post->category_id;

        $relatedposts = PostModel::wherehas('tags',function ($query) use($tagids, $id) {
            $query->wherein('tag_id',$tagids);
        })->wherehas('categories', function ($query) use($categoryid) {
            $query->where('id','=',$categoryid);
        })->where('id', '!=', $id)->get();

        $categories = categorymodel::all();


        $post->views += 1;
        $post->save();

        return view('post', ['post' => $post, 'categories' => $categories, 'relatedPosts' => $relatedposts]); 
    }

    public function random() {
        $post = PostModel::inRandomOrder()->with('tags', 'comments')->first();
        $tagids=$post->tags->pluck('id');
        $categoryid = $post->category_id;

        $relatedposts = PostModel::wherehas('tags',function ($query) use($tagids) {
            $query->wherein('tag_id',$tagids);
        })->wherehas('categories', function ($query) use($categoryid) {
            $query->where('id','=',$categoryid);
        })->get();

        $categories = CategoryModel::all();


        $post->views += 1;
        $post->save();

        return view('post', ['post' => $post, 'categories' => $categories, 'relatedPosts' => $relatedposts]); 
    }

    /**
     * show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * update the specified resource in storage.
     */
    public function update(request $request, string $id)
    {
        //
    }

    /**
     * remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
