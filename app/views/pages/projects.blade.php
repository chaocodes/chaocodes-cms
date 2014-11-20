@extends('pages.master')

@section('content')
<div class="content">
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
	<div id="skills"></div> {{-- Placeholder seperator --}}
	@endforeach
</div>
@stop
