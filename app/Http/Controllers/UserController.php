<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users.register', [
            'header' => "Register",
        ]);
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password'=> ['required','confirmed','min:8'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login(){
        return view('users.login', [
            'header' => "Log In",
        ]);
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password'=> ['required'],
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'User not Found'])->onlyInput('email');
    }
}
