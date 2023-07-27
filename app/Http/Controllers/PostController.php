<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\StatusModel;
use App\Models\TagModel;
use App\Models\PostTagModel;
use App\Http\Requests\PostRequest;
use Carbon\Carbon;

class PostController extends Controller
{ 
    public function detail (string $slug)
    {
        $post = PostModel::with('tags', 'comments')->where('slug', '=', $slug)->firstOrFail();
        $tagids=$post->tags->pluck('id');
        $categoryId = $post->category_id;

        $relatedposts = PostModel::wherehas('tags',function ($query) use($tagids) {
            $query->wherein('tag_id',$tagids);
        })->wherehas('category', function ($query) use($categoryId) {
            $query->where('id','=',$categoryId);
        })->where('id', '!=', $post->id)
        ->where('visibility', 1)
        ->limit(3)
        ->get();


        $categories = categorymodel::all();

        $post->views += 1;
        $post->save();
        return view('post', ['post' => $post, 'categories' => $categories, 'relatedPosts' => $relatedposts]); 
    }

    public function random() {
        $post = PostModel::inRandomOrder()->with('tags', 'comments')->firstOrFail();
        $tagids=$post->tags->pluck('id');
        $categoryId = $post->category_id;

        $relatedposts = PostModel::wherehas('tags',function ($query) use($tagids) {
            $query->wherein('tag_id',$tagids);
        })->wherehas('category', function ($query) use($categoryId) {
            $query->where('id','=',$categoryId);
        })->where('id', '<>', $post->id)
        ->limit(3)
        ->where('visibility', 1)
        ->get();

        $categories = CategoryModel::all();


        $post->views += 1;
        $post->save();

        return view('post', ['post' => $post, 'categories' => $categories, 'relatedPosts' => $relatedposts]); 
    }
}
