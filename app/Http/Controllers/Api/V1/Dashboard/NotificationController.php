<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\{Notification};

class NotificationController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $items = Notification::whereStatus('active')->latest()->get();
            return $this->_response('Success', 200,  ['items' => $items] );
        } catch (\Exception $e) {
            \Log::error('Error: ' . $e->getMessage());
            return $this->_response('Error', 500, ['error' => 'An error occurred while fetching data.']);
        }
    }

    private function _response(string $message, int $statusCode, array $data): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'statusCode' => $statusCode,
            'responseData' => $data,
        ], $statusCode, [
            'Content-Type' => 'application/json;charset=UTF-8',
            'Charset' => 'utf-8',
        ]);
    }
}
