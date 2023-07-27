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


        if($letter->save()) {
            return redirect()->back()->with('success', 'Letter has been send.');
        } else {
            return redirect()->back()->with('Something went wrong...');
        };

        // return view('contact');
    }
}
