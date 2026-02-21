<?php

namespace App\Services;

use App\Http\Resources\BaseApiResource;
use App\Mail\TestEmail;
use App\Models\User;
use Faker\Provider\Base;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
        return BaseApiResource::success(["user"=>$user, "token"=>$token], meta: ["role"=>$user->role ] );

    }

    public function logout(){
        $user = Auth::user();
       return BaseApiResource::success($user);

//        $user->tokens()->delete();
    }

    public function update($dados)
    {
        if($dados["role"] === "admin"){
            return BaseApiResource::error("Nao autorizado");
        }
        $user = Auth::user();

        $user->update($dados);
        $user->tokens()->delete();
        $token = $user->createToken('auth_token')->plainTextToken;
        return BaseApiResource::success(["user"=>$user, "token"=>$token]);
    }

    public function delete($id){
        $user = Auth::user();
        $user->tokens()->delete();
        $user->delete();
    }

    public function emailValidated($user)
    {
        Mail::to('teste@email.com')->send(new TestEmail());
        $user->email_verification_token = Str::random(60);
        Mail::to($user->email)->send();
    }
}

