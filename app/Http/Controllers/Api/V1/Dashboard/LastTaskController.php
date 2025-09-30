<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\{Task};
use Illuminate\Support\Facades\Auth;
use DateTime;

class LastTaskController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $yesterday = new DateTime('yesterday');
            $waitingTaskCount = Task::where('user_id','=', Auth::user()->id)->where('end_date' ,'>', $yesterday->format('Y-m-d H:i:s'))->where('status','=','waiting')->orderBy('end_date','desc')->count();
            $items = Task::select('id','user_id','task','end_date','status')->where('user_id','=', Auth::user()->id)->orderBy('id','desc')->limit(7)->get();
        
            $data = [
                'items' => $items,
                'waitingTaskCount' => $waitingTaskCount,
            ];

            return $this->_response('Success', 200, $data);
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
