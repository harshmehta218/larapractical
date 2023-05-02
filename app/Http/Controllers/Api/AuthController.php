<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\login;
use App\Models\User;
use App\Service\AuthService;
use App\Http\Resources\AuthResource;

class AuthController extends Controller
{
    private $service;

    public function __construct(AuthService $authService)
    {
        $this->service = $authService;
    }

    public function login(login $request)
    {
        $data = $this->service->login($request);
        return new AuthResource($data);
    }
}
