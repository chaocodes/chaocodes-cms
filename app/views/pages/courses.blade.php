@extends('pages.master')

@section('content')
<div id="about">
	<h3>Computer Science</h3>
	<br>
	@foreach ($courseCS as $course)
	<p><b>{{$course->name}}</b> - {{$course->description}}</p>
	<br>
	@endforeach
</div>
<div id="about">
	<h3>Math</h3>
	<br>
	@foreach ($courseMath as $course)
	<p><b>{{$course->name}}</b> - {{$course->description}}</p>
	<br>
	@endforeach
</div>
@stop
