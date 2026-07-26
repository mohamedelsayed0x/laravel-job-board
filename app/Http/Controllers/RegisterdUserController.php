<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterdUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'              => ['required'],
            'email'             => ['required', 'email'],
            'password'          => ['required', Password::min(5), 'confirmed'],
        ]);

        $user = User::create($attributes);
        Auth::login($user);

        return redirect('/jobs');
    }
}
