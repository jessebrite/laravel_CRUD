@extends('layout')

@section('title', 'Project')

@section('content')

	<div class="field"><h1 class="title">{{ $project->title }}</h1></div>

	<div class="content"><a href="/project/{{ $project->id }}/edit">Edit content</a></div>
	
	@if($project->tasks->count())	

	<div class="box">

		@foreach($project->tasks as $task)

		<form method="POST" action="/tasks/{{ $task->id }}">
			@method('PATCH')
			@csrf

			<label for="completed" class="checkbox {{ $task->completed ? 'is-complete' : '' }}">
				<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
				{{ $task->description }}
			</label>
		</form>

		@endforeach

	</div>

	@endif

	<!-- add a new task -->
	<form method="POST" action="/project/{{ $project->id }}/tasks" class="box">
		@csrf

		<div class="field">
			<label class="label" for="description">New Task</label>

			<div class="control">
				<input type="text" name="description" class="input" placeholder="New Task">
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Add Task</button>
			</div>
		</div>		

		@include('errors')

	</form>

@endsection