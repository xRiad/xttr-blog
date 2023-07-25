<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function edit () {
        $contact = ContactModel::firstOrFail();

        return view('admin.contacts.edit', compact('contact'));
    }

    public function update (ContactRequest $request) {
        $contact = ContactModel::firstOrFail();

        $contact->adress = $request->adress;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->info = $request->info;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        $contact->instagram = $request->instagram;
        $contact->linkedin = $request->linkedin;

        $contact->save();

        return redirect()->back()->with('success', 'Contact has been edited.');
    }
}
