<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LetterModel;

class LetterController extends Controller
{
    public function index () {
        $letters = LetterModel::all();

        return view('admin.letters.index', compact('letters'));
    }

    public function delete ($id) {
        $letter = LetterModel::findOrFail($id);

        $letter->delete();

        return redirect()->back()->with('success', 'Letter has been deleted.');
    }
}
