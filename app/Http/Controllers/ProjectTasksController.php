<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ProjectTasksController extends Controller
{
    function update(Task $task)
    {
    	$task->update([
    		'completed' => request()->has('completed')
    	]);
    	return back();
    }
}
