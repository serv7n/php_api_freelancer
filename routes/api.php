<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FreelancerSkillController;
use Illuminate\Support\Facades\Route;
Route::controller(AuthController::class)->prefix("auth")->group(function () {
    Route::post('login', 'login');
    Route::post("create","create" );

    Route::middleware('auth:sanctum')->group(function () {
        Route::post("logout", "logout" );
        Route::put("update", "update" );
    });
});


//Route::apiResource("freelancer-skill", FreelancerSkillController::class);
Route::get("freelancer-skill/{limit}", [FreelancerSkillController::class, "index"]);
Route::get("test", [AuthController::class,"test_envio_email"] );




Route::get("/", [AuthController::class,"status"] );
