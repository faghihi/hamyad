<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Input;

class ApiMid
{
    public function handle($request, Closure $next)
    {

        $n = Input::get('api_token');
        $user = User::where('api_token', $n)->first();
        if(!is_null($user))
            return $next($request);
        else
            return redirect('/api/v1/NotAuth');

    }
}
