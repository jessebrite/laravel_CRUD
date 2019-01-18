@extends('layout')

@section('title', 'Simple Form')

@section('content')
	<h1 class="title">Create a New Project</h1>
	<div>
		<form action="/project" method="POST">
		@csrf
			<div class="field">
				<input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" placeholder="Title of the project" autocomplete="off" value="{{ old('title') }}">
			</div>

			<div class="field">
				<textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="Project description">{{ old('description') }}</textarea>
			</div>
			<div class="field">
				<button class="button is-link" type="submit">Create Project</button>
			</div>
			
			@include('errors')
		</form>
	</div>
@endsection