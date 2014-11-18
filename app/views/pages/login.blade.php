@extends('pages.master')

@section('content')
<div class="content">
	<br>
	{{Form::open(array('url' => 'login'))}}
		<p>
			{{Form::label('username', 'User: ')}}
			{{Form::text('username', null, ['class' => 'textbox'])}}
		</p>
		<br>
		<p>
			{{Form::label('password', 'Password: ')}}
			{{Form::password('password', ['class' => 'textbox'])}}
		</p>
		<br>
		<p>
			{{Form::submit('Login', ['class' => 'button-link'])}}
		</p>
	{{Form::close()}}
</div>
@stop