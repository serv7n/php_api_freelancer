<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;

use App\Http\Requests\Auth\NewUserRequest;
use App\Models\User;
use App\Services\AuthService;

class AuthController extends Controller
{

    public function login(LoginRequest $request, AuthService $authService)
    {
        return  $authService->login($request->validated());
    }

    public function create(NewUserRequest $request, AuthService $authService )
    {
        return $authService->createUser($request->validated());
    }

    public function logout($id, AuthService $authService){
        $authService->logout($id);
    }
    public function update($id, NewUserRequest $request, AuthService $authService)
    {
        $user = User::find($id);
        return $request->validated() ? $user : $user->update($request->validated());
    }
}
