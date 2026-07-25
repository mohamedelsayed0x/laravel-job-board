<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterdUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        request()->validate([
            'name'              => ['required'],
            'email'             => ['required', 'email'],
            'password'          => ['required', Password::min(5), 'confirmed'],
        ]);
    }
}
