<?php

namespace App\Http\Middleware;

use Closure;
use App\Access;
use Auth;

class Dummy {
  public function handle($request, Closure $next) {
    if ( Auth::user()->accesses->name != 'Administrator' ) {
      return redirect('dashboard');
    }

    return $next($request);
  }
}
