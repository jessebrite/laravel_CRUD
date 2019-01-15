@extends('layout')

@section('title', 'Projects')

@section('content')
	<h1>This is the Project directory</h1>

	@foreach ($project as $proj)
		<li>{{ $proj->title }} </li>
		<li>{{$proj->description}}</li><br>
	@endforeach
@endsection