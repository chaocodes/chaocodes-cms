@extends('admin.form')

@section('form')
<h3>Add Tool</h3>
{{Form::open(['url' => 'admin/tool'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Tool', 'class' => 'textbox'])}}
<br>
{{Form::label('image', 'Image')}}
{{Form::text('image', null, ['placeholder' => 'images/', 'class' => 'textbox'])}}
<br>
{{Form::label('url', 'URL')}}
{{Form::text('url', null, ['placeholder' => 'http://', 'class' => 'textbox'])}}
<br>
{{Form::submit('Add Tool', ['class' => 'button-link'])}}
{{Form::close()}}
@stop