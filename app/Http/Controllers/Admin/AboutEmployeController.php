<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutEmployeModel;
use App\Http\Requests\AboutEmployeRequest;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class AboutEmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $employes = AboutEmployeModel::get(); 

       return view('admin.about_employes.index', compact('employes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about_employes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutEmployeRequest $request)
    {
       $employe = new AboutEmployeModel; 

       $img = $request->avatar;
       $imgExtension = $img->getClientOriginalExtension();
       $spr = DIRECTORY_SEPARATOR;
       $uuid = Str::uuid();
       $imgName = "{$uuid}.{$imgExtension}";
       $imgPath = "app{$spr}public{$spr}images{$spr}{$imgName}";
       $resizedImage = Image::make($img)->resize(600, 500)->save(storage_path($imgPath));

       $employe->name = $request->name;
       $employe->avatar = "images{$spr}$imgName";
       $employe->position = $request->position;
       $employe->about = $request->about;

       $employe->save();

       return redirect()->back()->with('success', 'Employe has been created.');
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
        $employe = AboutEmployeModel::findOrFail($id);

        return view('admin.about_employes.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutEmployeRequest $request, int $id)
    {
        $employe = AboutEmployeModel::findOrFail($id); 

        $spr = DIRECTORY_SEPARATOR;
        
        $imgPath = "app{$spr}public{$spr}{$employe->avatar}"; 
        $imgPath = str_replace(['\\', '/'], $spr, $imgPath);
        if(File::exists(storage_path($imgPath))) {
            File::delete(storage_path($imgPath));
        }
    
        $img = $request->avatar;
        $imgExtension = $img->getClientOriginalExtension();
        $spr = DIRECTORY_SEPARATOR;
        $uuid = Str::uuid();
        $imgName = "{$uuid}.{$imgExtension}";
        $imgPath = "app{$spr}public{$spr}images{$spr}{$imgName}";
        $resizedImage = Image::make($img)->resize(600, 500)->save(storage_path($imgPath));

        $employe->name = $request->name;
        $employe->position = $request->position;
        $employe->about = $request->about;
        $employe->avatar = "images{$spr}$imgName"; 

        $employe->save();

        return redirect()->back()->with('success', 'Employe has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
       $employe = AboutEmployeModel::findOrFail($id); 

       $employe->delete();

       return redirect()->back()->with('success', 'Employe has been deleted.');
    }
}
