<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Helpers\RoleHelper;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function store(Request $request) {

        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if( ! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your credentials could not be verified'
            ]);
        }

        session()->regenerate();

        $route = RoleHelper::redirect();

        return redirect()->route($route);
    }
    public function destroy(Request $request) {

        auth()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
