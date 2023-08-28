<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;

final class Logout
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {

        $guard = Auth::guard(); // get currently logged in user

        $user = $guard->user();

        $user->currentAccessToken()->delete(); // revoke access to the token used for this request

        return $user;    
    }
}
