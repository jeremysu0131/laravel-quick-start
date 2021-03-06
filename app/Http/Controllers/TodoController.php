<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use App\Services\Task1Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    private TaskService $taskService;
    private Task1Service $taskService1;

    public function __construct(
        TaskService $taskService,
        Task1Service $taskService1
    ) {
        $this->taskService=$taskService;
        $this->taskService1=$taskService1;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->taskService->getTasks();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isInsertSuccess=$this->taskService->saveTask($request->json('title'));

        if ($isInsertSuccess) {
            return 'success';
        } else {
            return 'fail';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
