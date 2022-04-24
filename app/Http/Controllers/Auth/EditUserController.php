<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class EditUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.edit', ['user' => $request->user()]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'father_name' => ['required', 'string', 'max:255'],
            'passpot_s' => ['required', 'string', 'max:255'],
            'passpot_n' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
          //  'password' => ['confirmed', Rules\Password::defaults()],
        ]);

        $request->user()->forceFill([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name ,
            'father_name' => $request->father_name,
            'passpot_s' => $request->passpot_s,
            'passpot_n' => $request->passpot_n,
            'gender' => $request->gender,
            'email' => $request->email,
           // 'password' => Hash::make($request->password),
        ])->save();

        return redirect(RouteServiceProvider::HOME);
    }
}
