<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AboutCardRequest;
use App\Models\AboutCardModel;

class AboutCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
       $cards = AboutCardModel::get(); 

       return view('admin.about_cards.index', compact('cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about_cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutCardRequest $request)
    {
        $card = new AboutCardModel;

        $card->title = $request->title; 
        $card->content = $request->content; 
        $card->icon = $request->icon; 

        $card->save();

        return redirect()->back()->with('success', 'Card has been succsessfully created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $card = AboutCardModel::findOrFail($id);
        return view('admin.about_cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutCardRequest $request, int $id)
    {
       $card = AboutCardModel::findOrFail($id);

       $card->title = $request->title;
       $card->content = $request->content;
       $card->icon = $request->icon;

        $card->save();
        return redirect()->back()->with('success', 'Card has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $card = AboutCardModel::findOrFail($id);

        $card->delete();

        return redirect()->back()->with('success', 'Card has been deleted.');
    }
}

