<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class teacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->role == 2){
                return $next($request);
            }
            else{
                return redirect('teacher/login')->with('message', 'Bạn không đủ quyền!');
            }
            
        }
        else{
            return redirect('teacher/login');
        }
    }
}
