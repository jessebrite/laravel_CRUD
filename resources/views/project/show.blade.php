@extends('layout')

@section('title', 'Project')

@section('content')

	<div><h1>{{ $project->title }}</h1></div>
	
	@if($project->tasks->count())	
	<div class="content">
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

	<div><a href="/project/{{ $project->id }}/edit">Edit content</a></div>

@endsection