<?php

namespace App\Http\Middleware;

use Closure;

class ConvertGetMethodToPost
{
    public function handle($request, Closure $next)
    {
        // Check if the request method is GET and the route is 'submit-information'
        if ($request->isMethod('GET') && $request->route()->getName() === 'submit-information') {
            // Convert GET request to POST request
            $request->setMethod('POST');
            // Add a CSRF token if it doesn't exist
            $request->merge(['_token' => csrf_token()]);
        }

        return $next($request);
    }
}
