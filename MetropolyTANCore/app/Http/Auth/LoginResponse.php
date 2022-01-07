<?php

namespace App\Http\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Modules\Role\Entities\RoleVar;

class LoginResponse implements LoginResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        if(auth()->user()->hasRole(RoleVar::DRIVER) || auth()->user()->hasRole(RoleVar::PASSENGER)){
            $home = '/';
        }else{
            $home = '/dashboard';
        }

        return redirect()->intended($home);
    }
}
