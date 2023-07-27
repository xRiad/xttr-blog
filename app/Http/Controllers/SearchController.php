<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function index (SearchRequest $request) {
        $query = $request->input('query');
        $posts = PostModel::with('tags', 'comments', 'status')->whereRaw('LOWER(`name`) LIKE ? ', ['%'.trim(strtolower($query)).'%'])->paginate(2);

        return view('search', ['posts' => $posts]);
    } 

    public function byCategory ($categorySlug) {
        $posts = PostModel::with('tags', 'comments')->where('category_slug', '=', $categorySlug)->paginate(2);

        return view('search', ['posts' => $posts]);
    }
}
