@extends('pages.master')

@section('content')
<div class="content">
	<object data="https://dl.dropboxusercontent.com/u/265609/resume.pdf" type="application/pdf" width="100%" height="100%">
		<p>
			It appears we cannot serve this PDF file to you in-browser, download a copy at: 
			{{HTML::link('https://dl.dropboxusercontent.com/u/265609/resume.pdf')}}
		</p>
	</object>
</div>
@stop
