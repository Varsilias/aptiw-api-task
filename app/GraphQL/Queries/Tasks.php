<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facacdes\Log;
use App\Models\Task;

final class Tasks
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        Log::info($args);
        return Task::all();

    }
}
