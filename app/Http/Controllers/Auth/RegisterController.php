<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('frontend.auth.register');
    }

    public function store(Request $request){
        //validation
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,user_account',
            'password' => 'required|confirmed|min:6'
        ]);
        //dd($request->password);
        //store user
        User::create([
            'user_name' => $request->name,
            'user_account' => $request->username,
            'password' => Hash::make($request->password),
            'user_role' => '1',
        ]);
        //sign the user in
        //dd(auth()->attempt($request->only('user_account','password')));
        auth()->attempt($request->only('user_account','password'));
        //redirect
        return redirect()->route('login');
    }
}
