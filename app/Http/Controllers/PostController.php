<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;
use App\Models\CategoriesModel;

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
    public function show(string $id)
    {
        try {
            $post = PostModel::firstOrFail();
            $categories = CategoriesModel::all();

            return view('post', ['post' => $post, 'categories' => $categories]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

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
