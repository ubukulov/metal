<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
        if (\Auth::attempt(['email' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back();
        }
    }
}
