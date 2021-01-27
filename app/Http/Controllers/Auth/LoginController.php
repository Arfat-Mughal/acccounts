<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show_login_form()
    {
        return view('auth.login');
    }
    public function process_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {

            return redirect()->route('dashboard');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }
    public function show_signup_form()
    {
        return view('auth.register');
    }
    public function process_signup(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|between:4,15',
            'password_confirmed' => 'required|same:password'
        ]);

        $user = User::create([
            'name' => trim($request->input('fullname')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);

        session()->flash('message', 'Your account is created');

        return redirect()->route('login');
    }

    public function forget_password()
    {
        return view('Auth.forget-password');
    }

    public function forget_password_request(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->input('email'))->first();
        if($user){
            session()->flash('message', 'Password Sent to your given email');
            return redirect()->route('login');
        }else{
            session()->flash('message', 'Email not found create your account');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Session::regenerate();
        Auth::logout();

        return redirect()->route('login');
    }

}
