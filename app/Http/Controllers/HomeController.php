<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class HomeController extends Controller
{
    public function index () {
        $posts = PostModel::paginate(2);
        return view('home', ['posts' => $posts]);
    }
}
