<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
	function store(Project $project)
	{
		$project->addTask(request()->validate(['description' => 'required']));

		return back();
	}

    function update(Task $task)
    {
    	request()->has('completed') ? $task->complete() : $task->incomplete();

    	// $task->update([
    	// 	'completed' => request()->has('completed')
    	// ]);
    	return back();
    }
}
