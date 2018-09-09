<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
    	return view('login');
    }

    public function login(Request $request) {
    	$credential = $request->only('email','password');

    	if (Auth::attempt($credential)) {
    		return redirect('/');
    	} else {
    		return redirect()->route('login');
    	}
    }

    public function logout() {
    	Auth::logout();

    	return redirect()->route('login');
    }
}
