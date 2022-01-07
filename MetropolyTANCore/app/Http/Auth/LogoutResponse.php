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

        return redirect()->intended('/login');
    }
}
