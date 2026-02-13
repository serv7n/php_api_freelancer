<?php

namespace App\Http\Resources;

use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BaseApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public static function success(
        mixed $data,
        int $status = 200,
        string $message = "success",
        array $meta = []
    ): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            "message" => $message,
            "meta" => $meta
        ], $status);
    }
    public static function error(
        string $message = "error",
        int $status = 500,
        mixed $errors = null,
    ): JsonResponse
    {
        return response()->json([
            "success" => false,
            "message" => $message,
            "errors" => $errors,

        ], $status);
    }
}
