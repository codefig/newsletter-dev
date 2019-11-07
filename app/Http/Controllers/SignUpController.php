<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SignUpController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ]);

        if ($validator->fails()) {
            return redirect('register')->withInput(Input::all())->withErrors($validator);
        } else {
            $user = User::create([
                'name' => $request->full_name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);
            Auth::login($user);
            return redirect()->route('home');
        }
    }
}
