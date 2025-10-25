<?php

namespace App\Livewire\ManageNews;

use Livewire\Component;
use App\Models\{News};

class NewsMenuComponent extends Component
{
    public function render()
    {
        return view('livewire.manage-news.news-menu-component',[
            'approvedMonitoringNewsCount' => News::whereHas('step', function($query) {
                $query->whereNotIn('step_id', [1,2])
                    ->latest()
                    ->take(1);
            })->count(),
            'waitingForapproveMonitoringNewsCount' => News::whereHas('step', function($query) {
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
                $query->where('step_id',11)
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
        ]);
    }
}
