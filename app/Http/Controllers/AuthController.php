<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\NewUserRequest;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Http\Resources\BaseApiResource;
use App\Mail\TestEmail;
use App\Models\User;
use App\Services\AuthService;
use Auth;
use Faker\Provider\Base;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{

    public function status(){
        return BaseApiResource::success("running");
    }

    public function login(LoginRequest $request, AuthService $authService)
    {
        return  $authService->login($request->validated());
    }

    public function create(NewUserRequest $request, AuthService $authService )
    {
        return $authService->create($request->validated());
    }

    public function logout( AuthService $authService){
        return$authService->logout();
    }
    public function update(UpdateUserRequest $request, AuthService $authService)
    {
        return $authService->update($request->validated());
    }
    public function isLoggedIn(AuthService $authService)
    {
        return Auth::user();
    }

    public function test_envio_email()
    {
        Mail::to('teste@email.com')->send(new TestEmail());
    }


}
