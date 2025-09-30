<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\PageViewLog;
use Illuminate\Support\Facades\Auth;

class LogPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Log the page view
        $userId = Auth::check()? $userId = Auth::user()->id : null;
        PageViewLog::create([
            'url' => $request->fullUrl(),
            'user_agent' => $request->header('User-Agent'),
            'ip_address' => $request->ip(),
            'user_id' => $userId,
        ]);

        return $next($request);
    }
}
