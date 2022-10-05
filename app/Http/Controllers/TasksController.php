<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {

            $tasks = Task::all();
            return view('tasks.index', compact('tasks'));

    }

    //public function show($id)
    //  public function show(Task $task)
    // public function show(Task $task)
    // {

    //         // $task = Task::find($id);
    //         //  return $task;
    //         // return $task;
    //         return view('tasks.show', compact('task'));


    // }
    // public function store(Request $request)
    // {

    // }

    // public function show($id)
    // {

    // }


    // public function edit($id)
    // {

    // }

    // public function update (Request $request, $id)
    // {

    // }
    // public function destroy($id)
    // {

    // }

}
