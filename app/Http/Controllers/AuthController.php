<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(login $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $credentials['email'])->where('role', 'user')->first();
            if ($user != null) {
                return redirect()->route('create.question');
            }
        } else {
            return redirect()->back()->with('message', __('validation.invalidCredentials'));
        }
    }
}
