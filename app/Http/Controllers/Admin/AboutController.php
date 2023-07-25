<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Models\AboutModel;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller
{
    public function edit () {
        $about = AboutModel::firstOrFail();

        return view('admin.about.edit', ['about' => $about]);
    }
    
    public function update (AboutRequest $request) {
        $about = AboutModel::firstOrFail();

        $about->title = $request->title;
        $about->about_content = $request->about_content;

        $imgPath = 'app/public/images/' . $about->img;
        if(File::exists(storage_path($imgPath))) {
            File::delete(storage_path($imgPath));
        }

        $img = $request->img;
        $imgExtension = $img->getClientOriginalExtension();
        $imgName = time() . '.' . $imgExtension;
        $imgPath = 'app/public/images/' . $imgName;
        $resizedImage = Image::make($img)->resize(600, 500)->save(storage_path($imgPath));

        $about->img = $imgName;

        if ($about->save()) {
            return redirect()->back()->with('success', 'About page has been succsessfully modified.');
        } else {
            return redirect()->back()->with('failure', 'Something went wrong.');
        }
    }
}