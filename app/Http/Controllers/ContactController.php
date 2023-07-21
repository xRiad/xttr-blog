<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LetterRequest;
use App\Models\LetterModel;
use App\Models\ContactModel;

class ContactController extends Controller
{
    public function index () {
        $contact = ContactModel::first(); 

        return view('contact', ['contact' => $contact]);
    }

    public function saveLetter (LetterRequest $request) {
        $letter = new LetterModel;
        
        $letter->name = $request->name;
        $letter->email = $request->email;
        $letter->subject = $request->subject;
        $letter->message = $request->message;

        $letter->save();

        return view('contact');
    }
}
