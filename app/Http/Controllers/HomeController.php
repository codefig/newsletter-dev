<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.dashboard', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }

    public function email()
    {
        $user = Auth::user();
        return view('user.email', compact('user'));
    }

    public function compose()
    {
        return view('user.compose');
    }
}
