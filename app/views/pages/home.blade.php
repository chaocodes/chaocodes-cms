@extends('pages.master')

@section('content')
<div id="about">
	<div id="abouttext">
		<h3>About Me</h3>
		<p>About Me</p>
	</div>
	<div id="aboutimage">
		{{HTML::image('images/aboutmebanner.jpg', 'banner')}}
	</div>
</div>
<div id="skills">
	<h3>Programming</h3>
	<div class="outbar"><div class="innerbar" style="width: 85%">
		JAVA
	</div></div>
</div>
<div id="software">
	<h3>Software</h3>
	<div class="softwareimage">
		<a href="{{URL::to('/')}}">{{HTML::image('images/software/photoshop.jpg', 'photoshop')}}</a>
	</div>
</div>
@stop
