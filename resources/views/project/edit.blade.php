@extends('layout')

@section('content')
	<h1 class="title">Edit Project</h1>

	<form method="POST" action="/project/{{ $project->id }}">
		@method('PATCH')
		@csrf

		<div class="field">
			<label class="label" for="title">Title</label>
			<div class="control">
				<input type="text" name="title" class="input" placeholder="Title" value="{{ $errors->has('title') ? old('title') : $project->title }}">
			</div>
		</div>

		<div class="field">

			<label class="label" for="description">Description</label>

			<div class="control">
				<textarea name="description" class="textarea">{{ $errors->has('description') ? old('description') : $project->description }}</textarea>
			</div>
		</div>

		<div class="field">
			<div class="control">
				<button type="submit" class="button is-link">Update Project</button>
			</div>
		</div>

		@if($errors->any())
			<div class="notification is-danger">
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</div>
		@endif()
	</form>

	<form method="POST" action="/project/{{ $project->id }}">
		@method('DELETE')
		@csrf

		<div class="field">
			<div class="control">
				<button type="submit" class="button">Delete Project</button>
			</div>
		</div>
	</form>
@endsection