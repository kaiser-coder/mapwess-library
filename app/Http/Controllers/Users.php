<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function login() {
        return view('users/login');
    }

    public function logout()
    {
        session()->flush();
        return view('users/login');
    }

    public function auth(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)
        ->where('password', $request->password)
        ->first();

        // dd($user);

        if ($user) {
            session(['user_id' => $user->id]);
            return redirect('/profile')->with('user', $user);
        } else {
            return view('users/login');
        }
    }

    public function register()
    {
        return view('users/register');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed',
            'captcha' => 'required'
        ]);

        $user = User::where('name', $request->name)
        ->where('email', $request->email)
        ->count();

        if ($user == 1) {
            return view('users/register');
        } else {
            User::create($request->all());
            return view('users/login');
        }
    }

    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    public function profile() {
        return view('users/profile', ['user' => User::find(session('user_id'))]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'new_password' => 'required|min:8|confirmed'
        ]);


        User::where('id', session('user_id'))
        ->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->new_password
        ]);

        return view('users/profile', ['user' => User::find(session('user_id'))]);
    }
}
