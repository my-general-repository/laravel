<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class AuthenticateAdminOnly {

    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }


    public function handle($request, Closure $next)
    {
        if(!$this->auth->user()) {
            return redirect()->guest('login');
        }
        if($this->auth->user()->role != 'admin') {
            return redirect()->guest('login');
        }

        return $next($request);
    }

}