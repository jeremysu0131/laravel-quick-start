<?php


namespace App\Services;

use Illuminate\Support\Facades\DB;

class TaskService
{
    public function getTasks()
    {
        $tasks = DB::select('select * from tasks');
        return $tasks;
    }

    public function saveTask(string $title):bool
    {
        return DB::insert("insert into tasks (title) VALUES (?) ", [$title]);
    }
}
