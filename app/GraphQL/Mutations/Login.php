<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

final class Login
{
    private $token_name = "Login";
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
  
        $guard = Auth::guard(Arr::first(config('sanctum.guard')));

        if(!$guard->attempt($args)) {
            throw new Error('Invalid credentials.');
        }

        $user = $guard->user();
        $token = $user->createToken($this->token_name);

        return ['access_token' => $token->plainTextToken, 'user' => $user ];
    }
}
