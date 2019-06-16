<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



class TasksController extends Controller
{
    public function home()
    {
        $tasks = \App\Task::all();
        
    	return view('todo',['tasks' => $tasks]);
    }
}
