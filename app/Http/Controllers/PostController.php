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
        $categorySlug = $post->category_slug;

        $relatedposts = PostModel::wherehas('tags',function ($query) use($tagids) {
            $query->wherein('tag_id',$tagids);
        })->wherehas('category', function ($query) use($categorySlug) {
            $query->where('slug','=',$categorySlug);
        })->where('slug', '<>', $slug)->get();

        $categories = categorymodel::all();

        $post->views += 1;
        $post->save();
        return view('post', ['post' => $post, 'categories' => $categories, 'relatedPosts' => $relatedposts]); 
    }

    public function random() {
        $post = PostModel::inRandomOrder()->with('tags', 'comments')->firstOrFail();
        $tagids=$post->tags->pluck('id');
        $categorySlug = $post->category_slug;

        $relatedposts = PostModel::wherehas('tags',function ($query) use($tagids) {
            $query->wherein('tag_id',$tagids);
        })->wherehas('category', function ($query) use($categorySlug) {
            $query->where('slug','=',$categorySlug);
        })->get();

        $categories = CategoryModel::all();


        $post->views += 1;
        $post->save();

        return view('post', ['post' => $post, 'categories' => $categories, 'relatedPosts' => $relatedposts]); 
    }
}
