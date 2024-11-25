<?php
namespace App\Traits;

trait ApiResponseTrait
{
    public function successResponse($result, $code = 200)
    {
        return response()->json([
            'success' => true,
            'data' => $result
        ], $code);
    }

    public function errorResponse($message, $code = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], $code);
    }
}