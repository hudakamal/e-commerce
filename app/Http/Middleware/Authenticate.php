<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request): ?string
    {
        if ($request->expectsJson()) {
            return null; // Don't redirect for JSON requests
        }

        // Store a flag in the session indicating the need to show the login modal
        session()->put('show_login_modal', true);

        return null; // Return null to prevent redirecting to a specific route
    }

}
