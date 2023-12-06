<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.register');
    }

    public function users() 
    {
        return view('register.users');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        if ($user->role === 1) {
            auth()->login($user);

            return redirect('/')->with('success', "Account successfully registered.");
        } else {
            auth()->login($user);

            return redirect('/users')->with('success', "Account successfully registered.");        
        }
    }
}
