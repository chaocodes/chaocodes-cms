@extends('pages.master')

@section('content')
<div class="content">
	<h1>Page not found!</h1>
	<p>{{HTML::link('/', 'Click here to return to the home page.')}}</p>
</div>
@stop