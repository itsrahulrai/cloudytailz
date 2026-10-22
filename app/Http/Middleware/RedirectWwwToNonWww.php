<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectWwwToNonWww
{
    /**
     * Handle an incoming request.
     * Redirects www.cloudytailz.com (and any www subdomain) to the preferred non-www canonical URL.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $host = $request->header('host');

        if ($host && str_starts_with(strtolower($host), 'www.')) {
            $nonWwwHost = substr($host, 4);
            $url = 'https://' . $nonWwwHost . $request->getRequestUri();
            return redirect()->to($url, 301);
        }

        return $next($request);
    }
}

