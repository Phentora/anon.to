<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public $admins = [
        'admin',
    ];

    public function handle($request, Closure $next)
    {
        if (!in_array(auth()->user()->username, $this->admins)) {
            if ($request->expectsJson()) {
                return abort(403, 'Access Denied!');
            }

            return redirect('/');
        }

        return $next($request);
    }
}
