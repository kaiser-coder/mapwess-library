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
        return redirect('/login');
    }

    public function auth(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)
        ->where('password', $request->password)
        ->first();

        // dd($user);

        if (null !== $user) {
            session(['user_id' => $user->id, 'user_mail' => $user->email]);
            return redirect('/profile')->with('user', $user);
        } else {
            return redirect('/login')->with('error_message', 'This user doesn\'t exist');
        }
    }

    public function register()
    {
        return view('users/register');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|confirmed',
            'captcha' => 'required'
        ]);

        $user = User::where('name', $request->name)
        ->where('email', $request->email)
        ->first();

        if (!null == $user) {
            return redirect('/register')->with('error_message', 'This user already exist');
        } else {
            User::create($request->all());
            return redirect('/login');
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
        $request->validate([
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

        return redirect('/profile')->with('user', User::find(session('user_id')));
    }
}
