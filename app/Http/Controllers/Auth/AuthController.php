<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('dashboard.dashboard');
        }else{
            if(\Request::segment(1) == 'login'){
                return view('auth.login');
            }
            elseif(\Request::segment(1) == 'register'){
                return view('auth.register');
            }
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(User::where('email', $request->email)->first()){
            return redirect()->route('register')->withErrors([
                'message' => 'Пользователь с таким логином уже существует!'
            ]);
        }else{
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);
            Auth::login($user);
            return $this->index();
        }
    }

    public function login(Request $request)
    {

        $user = User::where('email', $request->email)->first();
        
        if($user){
            if(Hash::check($request->password, $user->password)){
                Auth::login($user);
                return $this->index();
            }else{
                return redirect()->route('login')->withErrors([
                    'message' => 'Повторите попытку!'
                ]);
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
