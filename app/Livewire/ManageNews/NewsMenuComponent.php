<?php

namespace App\Livewire\ManageNews;

use Livewire\Component;
use App\Models\{News};
use Illuminate\Support\Facades\Auth;

class NewsMenuComponent extends Component
{
    public function render()
    {
        $userId = Auth::user()->id;

        return view('livewire.manage-news.news-menu-component',[
            'approvedMonitoringNewsCount' => News::whereHas('step', function($query) {
                $query->whereNotIn('step_id', [1,2])
                    ->latest()
                    ->take(1);
            })->count(),
            'waitingForApproveMonitoringNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 1)
                    ->latest()
                    ->take(1);
            })->count(),
            'rejectedMonitoringNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 2)
                    ->latest()
                    ->take(1);
            })->count(),

            'waitingForAddInfoNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 3)
                    ->latest()
                    ->take(1);
            })->count(),
            'addedInfoNewsCount' => News::whereHas('step', function($query) {
                $query->whereNotIn('step_id', [1,2,3])
                    ->latest()
                    ->take(1);
            })->count(),

            'waitingForTitrsCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 4)
                    ->latest()
                    ->take(1);
            })->count(),
            'waitingForApproveTitrsCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 5)
                    ->latest()
                    ->take(1);
            })->count(),
            'approvedTitrsCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 6)
                    ->latest()
                    ->take(1);
            })->count(),
            'rejectedTitrsCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 7)
                    ->latest()
                    ->take(1);
            })->count(),

            'reviewNewsCount' => News::whereHas('step', function($query) {
                $query->whereIn('step_id',[6,8,9,10,11])
                    ->latest()
                    ->take(1);
            })->count(),
            'approvedReviewNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id',11)
                    ->latest()
                    ->take(1);
            })->count(),
            'rejectedReviewNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id',10)
                    ->latest()
                    ->take(1);
            })->count(),
            'waitingForAssignReviewNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id',6)
                    ->latest()
                    ->take(1);
            })->count(),
            'waitingForReviewNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id',8)
                    ->latest()
                    ->take(1);
            })->count(),
            'waitingForCheckingReviewNewsCount' => News::whereHas('step', function($query) {
                $query->where('step_id',9)
                    ->latest()
                    ->take(1);
            })->count(),

            'waitingForPublishedCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 11)
                    ->latest()
                    ->take(1);
            })->count(),
            'publishedCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 12)
                    ->latest()
                    ->take(1);
            })->count(),
            'notPublishedCount' => News::whereHas('step', function($query) {
                $query->where('step_id', 13)
                    ->latest()
                    ->take(1);
            })->count(),

            // speciefic user
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
