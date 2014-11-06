@extends('pages.master')

@section('content')
<div id="about">
	<br>
	{{Form::open(array('url' => 'login'))}}
		<p>
			{{Form::label('username', 'User: ')}}
			{{Form::text('username')}}
		</p>
		<br>
		<p>
			{{Form::label('password', 'Password: ')}}
			{{Form::password('password')}}
		</p>
		<br>
		<p>
			{{Form::submit('Login')}}
		</p>
	{{Form::close()}}
</div>
@stop