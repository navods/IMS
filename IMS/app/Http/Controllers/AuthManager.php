<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        if (Auth::check()){
            return redirect()->intended(route('home'));
        }
        return view('login');
    }

    function registration(){
        if (Auth::check()){
            return redirect()->intended(route('home'));
        }
        return view('reg');
    }

    function loginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'));
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'facselect' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);
        $data['facselect'] = $request->facselect;
        $data['department'] = $request->department;
        $data['labID'] = $request->labID;
        $user = User::create($data);

        if(!$user){
            return redirect(route('registration'));
        }
        return redirect(route('login'));
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }

    function listusernew(){
        $data = User::all();
        return view('useradmin', ['users'=>$data]);
        //$huuu = User::where('permission', '=', 1)->get();
        
        //return view('useradmin', $huuu);
        
    }

    function listuserpost($username){
        //$data = User::all();
        //return view('useradmin', ['users'=>$data]);
        //echo $username;
    }
}
