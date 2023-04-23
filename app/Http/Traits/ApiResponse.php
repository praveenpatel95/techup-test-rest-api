<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

trait ApiResponse
{
    /**
     * Build a success response
     * @param $data
     * @param $status
     * @return JsonResponse
     */
    public function success($data, $status = Response::HTTP_OK): JsonResponse
    {
        return response()->json(['success' => true, 'data' => $data], $status);
    }

    /**
     * Build error response
     * @param $message
     * @param $status
     * @return JsonResponse
     */
    public function error($message, $status): JsonResponse
    {
        return response()->json(['success' => false, 'message' => $message], $status);
    }
}
