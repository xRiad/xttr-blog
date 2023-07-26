<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminAuthRequest;

class AuthController extends Controller
{
    public function login () {
        return view('admin.auth.login');
    }

    public  function loginCheck (AdminAuthRequest $request) {
       if(auth()->attempt([
          'email' => $request->email,
          'password' => $request->password
       ], $request->remember )) {
          return redirect()->route('admin.index');
       } else {
          return redirect()->back();
       }
    }

    public function logOut () {
        auth()->logout();

        return redirect()->route('admin.login');
    }
}
