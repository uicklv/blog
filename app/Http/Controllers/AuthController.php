<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "name" => ["required", "string", "min:4", "max:255"],
            "email" => ["required", "email", "string", "unique:users", "min:6", "max:255"],
            "password" => ["required", "confirmed", "min:6"],
        ]);

        $user = \App\Models\User::create([
            "name" => $data["name"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
        ]);

        if ($user) {
            auth("web")->login($user);
        }

        return redirect(route("home"));
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string", "min:6", "max:255"],
            "password" => ["required", "min:6"],
        ]);

        if(auth("web")->attempt($data)) {
            return redirect(route("home"));
        }

        return redirect(route("login"))->withErrors(["email" => "Credentials is invalid"]);
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("home"));
    }
}
