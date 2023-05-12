<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;

class AdminPanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if (auth()->user() == null){
            return redirect()->route('main.index');
        }

        $takeUri = substr($request->path(), 0, 10);


        if (auth()->user()->role == 'helper'){
            if ($takeUri != 'timetables' && (auth()->user()->role != 'admin')){
                if ($takeUri == 'hostel/1'){
                    return $next($request);
                }
                return redirect()->route('main.index');
            }
        }else if (auth()->user()->role != 'admin'){
            return redirect()->route('main.index');
        }


//        if (auth()->user()->role != 'admin'){
//            dd('!= admin');
//           return redirect()->route('main.index');
//        }

        return $next($request);
    }
}
