<?php

namespace App\GraphQL\Mutations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

final class CreateTask
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        $user = Auth::user();
        $task = $user->tasks()->create($args);

        return $task;
    }
}
