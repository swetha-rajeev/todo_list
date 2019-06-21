<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Task;

class TasksController extends Controller
{
    public function home()
    {
        $tasks = \App\Task::all();
        
    	return view('todo',['tasks' => $tasks]);
    }
    public function store(){

    	//return request('todo_item');

        $newTask = new \App\Task; 
         $newTask->name = request('todo_item');
         $newTask->completed = 0;
      
        $newTask->save();  

         return redirect('/'); //default get request.

    } 
    public function delete(){

      //delete task


    }
}
