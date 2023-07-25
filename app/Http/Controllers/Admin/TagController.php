<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TagModel;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = TagModel::get();

        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TagRequest $request)
    {
       $tag = new TagModel;
       
       $tag->name = $request->name;

       $tag->save();

       if($tag->save()) {
            return redirect()->back()->with('success', 'Tag has been created.');
       } else {
            return redirect()->back()->with('failure', 'Tag has been created.');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
       $tag = TagModel::findOrFail($id);

       return view('admin.tags.edit', compact('tag')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $tag = TagModel::findOrFail($id);

       return redirect()->back()->with('success', 'Tag has been created.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
       $tag = TagModel::findOrFail($id);
        
       $tag->delete();
    }
}
