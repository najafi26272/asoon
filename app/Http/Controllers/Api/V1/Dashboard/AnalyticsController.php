<?php

namespace App\Http\Controllers\Api\V1\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\{Comment, Jalase, Mosavabat, News, NewsViewsCount, Province, Service, Task, Project};
use Illuminate\Support\Facades\Auth;

class AnalyticsController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            $tasksCount = Auth::user()->level == "admin" ? Task::Count() : Task::whereUserId(Auth::user()->id)->count() ;
            $finishedTasksCount = Auth::user()->level == "admin" ?  Task::whereStatus('finished')->Count()  : Task::whereUserId(Auth::user()->id)->whereStatus('finished')->Count();
            $waitingTasksCount = Auth::user()->level == "admin" ?  Task::whereStatus('waiting')->Count()  : Task::whereUserId(Auth::user()->id)->whereStatus('waiting')->Count();
            $progressingTasksCount = Auth::user()->level == "admin" ? Task::whereStatus('progressing')->Count() : Task::whereUserId(Auth::user()->id)->whereStatus('progressing')->Count();
            $projectCount = Auth::user()->level == "admin" ? Project::count() :
            Project::where(function ($query) {
                $query->where('user_id', Auth::user()->id)->orWhere('creator_id', Auth::user()->id)
                    ->orWhereHas('members', function ($q) {
                        $q->where('user_id', Auth::user()->id);
                    });
                })->with('members')->count();
                
            $jalaseCount = Auth::user()->level == "admin" ? Jalase::count() :
                Jalase::where(function($query) {
                $query->where('creator_id', Auth::user()->id)
                    ->orWhereHas('hazerin', function($q) {
                        $q->where('user_id', Auth::user()->id);
                    })
                    ->orWhereHas('ghayebin', function($q) {
                        $q->where('user_id', Auth::user()->id);
                    });
                })->with('categories', 'hazerin')
                ->count();

            $data = [
                'tasksCount' => $tasksCount,
                'finishedTasksCount' => $finishedTasksCount,
                'waitingTasksCount' => $waitingTasksCount,
                'progressingTasksCount' => $progressingTasksCount,
                'jalaseCount' => $jalaseCount,
                'projectCount' => $projectCount,
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