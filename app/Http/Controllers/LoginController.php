<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'email'      => ['required', 'email'],
            'password'   => ['required']
        ]);

        if(! Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                'email' => 'Invalid credentials'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
