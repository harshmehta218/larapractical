<?php

namespace App\Service;

use App\Models\User;

class AuthService
{
    private $model; 

    public function __construct(User $userModel)
    {
        $this->model = $userModel;
    }

    public function login($request)
    {
        $data = [];
        $user = User::where('email', $request->email)->first();
        $data = [
            'user' => $user,
            'token' => $user->createToken("Api-Token")->plainTextToken
        ];
        return $data;
    }
}