@extends('pages.master')

@section('content')
<div id="about">
	<p>Admin Home</p>
	{{Form::open(array('url' => 'logout'))}}
		{{Form::submit('Logout')}}
	{{Form::close()}}
	<br>
</div>
@stop