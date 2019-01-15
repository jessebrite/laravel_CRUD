<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Input;
use App\Project;


class ProjectController extends Controller
{
    function index()
    {

    	$project = Project::all(); // retrieves all models
    	
    	return view('project.index', compact('project'));
    }

    function create()
    {

    	return view('project.create');
    }

    // type declaration employed here
    function store(Project $request)
    {
        $validated = request()->validate([
            'title' => 'required | min:3',
            'description' => 'required | min:3'
        ]);

        Project::create($validated);

    	return redirect('/project');
    }

    function edit($id)
    {
    	$project = Project::findOrFail($id);

    	return view('project.edit', compact('project'));
    }

    function update(Request $request, $id)
    {
         $this->validate($request, [
            'title' => 'required | min:3',
            'description' => 'required | min:3'
        ]);

        $project = Project::findOrFail($id);

         // Project::update($validated);

    	$project->title = request('title');
    	$project->description = request('description');

    	$project->save();

    	return redirect('/project');
    }

    function destroy($id)
    {
    	Project::findOrFail($id)->delete();

    	return redirect('/project');
    }

    function sideNotes()
    {

    	return view('sideNotes');
    }

    
    function show($id)
    {
        $project = Project::findOrFail($id);

        return view('project.show', compact('project'));
    }

}
