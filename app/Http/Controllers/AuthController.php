<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('landingpage');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('mainpage')->with('save', 'Success')->withErrors('error', 'Failed');
        }

        return redirect("login")->withSuccess('You have invalid credentials');
    }

    public function register()
    {
        return view('register');
    }

    public function mainpage()
    {
        return view('mainpage');
    }

    
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phoneNumber' => 'required',
            'mailingAddress' => 'required',
            'state' => 'required',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        $check->save();
        return redirect("login")->with('save', 'Success')->withErrors('error', 'Failed');;
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'mailingAddress' => $data['mailingAddress'],
            'state' => $data['state'],
            'password' => Hash::make($data['password'])
        ]);
    }

}
