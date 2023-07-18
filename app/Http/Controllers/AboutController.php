<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutModel;
use App\Models\AboutCardModel;
use App\Models\AboutEmployeModel;

class AboutController extends Controller
{
    public function index () {
       try {
            $about = AboutModel::firstOrFail();
            $aboutCards = AboutCardModel::all();
            $aboutEmployes = AboutEmployeModel::all();
            return  view('about', ['about' => $about, 'cards' => $aboutCards, 'employes' => $aboutEmployes]);
        } catch (\Throwable $th) {
            return $th->getMessage();            
        } 
    }
}
