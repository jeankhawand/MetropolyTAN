<?php

namespace App\Http\Auth;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;
use Modules\Role\Entities\RoleVar;

class LogoutResponse implements LogoutResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        ddd(auth()->user());
        if(auth()->user()->hasRole(RoleVar::DRIVER) || auth()->user()->hasRole(RoleVar::PASSENGER)){
            $home = '/';
        }else{
            $home = '/login';
        }

        return redirect()->intended($home);
    }
}
