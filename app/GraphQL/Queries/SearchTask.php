<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

final class SearchTask
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user = Auth::user();
        $searchParam = $args["search"];


        $tasks = Task::where(["user_id" => $user->id, 'title' => "%".$searchParam."%"])
            ->orwhere(["user_id" => $user->id, 'description' => "%".$searchParam."%"])
            ->get();
            
        return $tasks;
    }
}
