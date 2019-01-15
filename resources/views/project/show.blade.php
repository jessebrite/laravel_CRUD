@extends('layout')

@section('title', 'Project')

@section('content')

	<div><h1>{{ $project->title }}</h1></div>
	
	@if($project->tasks->count())	
	<div>
		@foreach($project->tasks as $task)
			<li>{{ $task->description }}</li>
		@endforeach
	</div>
	@endif

	<div><a href="/project/{{ $project->id }}/edit">Edit content</a></div>

@endsection