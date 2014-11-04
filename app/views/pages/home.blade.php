@extends('pages.master')

@section('content')
<div id="about">
	<div id="abouttext">
		<h3>About Me</h3>
		<p>Welcome to ChaoCodes.com! My name is Chao Lai and this is my portfolio. I'm currently a Computer Science major at the University of Connecticut at Storrs, CT. 
		I believe that I am a highly motivated and quick-learning computer programmer that also enjoys playing video games and watching movies. 
		More information about why I believe you should hire me can be located on the various pages of this website. Thanks for visiting!</p>
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
