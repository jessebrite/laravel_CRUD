@extends('layout')

@section('title', 'Projects')

@section('content')
	<h1 class="title">This is the Project directory</h1>
		<ul>
		@foreach ($project as $proj)
			<a href="/project/{{ $proj->id }}/edit"><li>{{ $proj->title }}</li></a>
		@endforeach
	</ul>
@endsection