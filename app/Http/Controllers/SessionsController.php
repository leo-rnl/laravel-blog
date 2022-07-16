<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{



    public function create() {
        return view('sessions.create');
    }

    /**
     * @throws ValidationException
     */
    public function store() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // If success auth
        if(auth()->attempt($attributes)) {
            session()->regenerate();
            // Session fixation -> Security improvement

            return redirect('/')->with('success', 'Welcome back!');
        }

        // Auth failed
//        return back()->withErrors('email', "Wrong credential");
//         SAME THING AS =>

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye!');
    }
}
