<?php

namespace App\Services;

use App\Http\Resources\BaseApiResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login($dados)
    {
        if (!Auth::attempt($dados)) {
            return BaseApiResource::error("Credenciais inválidas", 401);
        }
        $user = Auth::user();
        $user->tokens()->delete();
        $token = $user->createToken('auth_token')->plainTextToken;
        $dados = [
            'user' => $user,
            'token' => $token
        ];
        return BaseApiResource::success($dados, meta: ["role"=>$dados["user"]->role] );
    }

    public function create($dados)
    {
        $user = User::create($dados);
        $token = $user->createToken('auth_token')->plainTextToken;
        return BaseApiResource::success(["user"=>$user, "token"=>$token], meta: ["role"=>$dados["user"]->role, ] );

    }

    public function logout($id){
        $user =  User::find($id);
        $user->tokens()->delete();
    }
}

