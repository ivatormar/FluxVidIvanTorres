<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function signupForm(){
        return view('auth.signup');
    }

    public function signup(SignupRequest $request)
    {
        $user=new User();
        $user->username=$request->get('username');
        $user->name=$request->get('name');
        $user->birthDate=$request->get('birthDate');
        $user->email=$request->get('email');
        $user->password=Hash::make($request->get('password'));
        $user->assignRole('user');

        $user->save();

        Auth::login($user);

        return redirect()->route('index');
    }

    public function loginForm(){
        if(Auth::viaRemember()){
            return 'Bienvenido de nuevo';
        }else if(Auth::check()){
            return redirect()->route('users.profile');
        }else{
            return view('auth.login');
        }
    }

    public function login(Request $request){
        $credentials=$request->only('username','password');
        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('users.profile');
        }else{
            $error='Error al acceder a la aplicación';
            return view ('auth.login',compact('error'));
        }
    }

    public function logout (Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');

    }

}
