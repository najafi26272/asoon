<?php

namespace App\Livewire\ManageNews;

use Livewire\Component;
use App\Models\{News};
use Illuminate\Support\Facades\Auth;

class MyNewsMenuComponent extends Component
{
    public function render()
    {
        $userId = Auth::user()->id;

        return view('livewire.manage-news.my-news-menu-component',[
            'approvedMyMonitoringNewsCount' => News::where('creator_id',$userId)->whereHas('step', function($query) {
                $query->whereNotIn('step_id', [1,2])
                    ->latest()
                    ->take(1);
            })->count(),
            'waitingForApproveMyMonitoringNewsCount' => News::where('creator_id',$userId)->whereHas('step', function($query) {
                $query->where('step_id', 1)
                    ->latest()
                    ->take(1);
            })->count(),
            'rejectedMyMonitoringNewsCount' => News::where('creator_id',$userId)->whereHas('step', function($query) {
                $query->where('step_id', 2)
                    ->latest()
                    ->take(1);
            })->count(),

            'waitingForMyTitrsCount' => News::whereHas('step', fn($q) => $q->where('step_id', 4))
                ->whereHas('titles', fn($q) => $q->where('creator_id', $userId))
                ->latest()->take(1)
                ->count(),
            'waitingForApproveMyTitrsCount' => News::whereHas('step', fn($q) => $q->where('step_id', 5))
                ->whereHas('titles', fn($q) => $q->where('creator_id', $userId))
                ->latest()->take(1)
                ->count(),
            'approvedMyTitrsCount' => News::whereHas('titles', fn($q) => $q->where('creator_id', $userId)->where('status', 'accept'))
                ->count(),
            'rejectedMyTitrsCount' => News::whereHas('titles', fn($q) => $q->where('creator_id', $userId)->where('status', 'reject'))
                ->count(),

            'approvedMyReviewNewsCount' => News::whereHas('reviews', fn($q) => $q->where('editor_id', $userId)->where('status', 'accept'))
            ->count(),                   
            'rejectedMyReviewNewsCount' => News::whereHas('reviews', fn($q) => $q->where('editor_id', $userId)->where('status', 'reject'))
            ->count(),                   
            'waitingForMyReviewNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id',8)->latest()->take(1);
            })->count(),
            'waitingForCheckingMyReviewNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id',9)->latest()->take(1);
            })->count(),
    
        ]);
    }

}
