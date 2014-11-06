@extends('pages.master')

@section('content')
<div id="about">
	@foreach ($projects as $project)
	<div id="abouttext">
		<h3>{{$project->name}}</h3>
		<p>
			{{$project->description}}
			<br>
			<b>Source:</b> <a href="{{$project->url}}">{{$project->url}}</a>
		</p>
	</div>
	<div id="aboutimage">
		<img src="{{$project->image}}" alt="banner" />
	</div>
	@endforeach
	<br>
</div>
@stop