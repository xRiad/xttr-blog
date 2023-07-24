<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutModel;

class AdminAboutCardsController extends Controller
{
   public function index () { 
       $about = AboutModel::firstOrFail(); 

       return view('admin.about.index', ['about' => $about]);
   }
}
