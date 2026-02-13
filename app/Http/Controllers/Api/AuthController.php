<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthRequestLogin;

use App\Http\Requests\Auth\AuthRequestNewUser;
use App\Models\User;
use App\Services\AuthService;

class AuthController extends Controller
{

    public function login(AuthRequestLogin $request, AuthService $authService)
    {
        return  $authService->login($request->validated());
    }

    public function create(AuthRequestNewUser $request,AuthService $authService )
    {
        return $authService->createUser($request->validated());
    }

    public function logout($id){

    }
}
