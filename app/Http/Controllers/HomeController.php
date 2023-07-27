<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class HomeController extends Controller
{
    public function index () {
        $posts = PostModel::with('tags', 'comments', 'status')
        ->where('visibility', 1) 
        ->paginate(2);
        return view('home', compact('posts'));
    }
}
