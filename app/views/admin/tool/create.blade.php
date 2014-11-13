@extends('admin.form')

@section('form')
<h3>Add Tool</h3>
{{Form::open(['url' => 'admin/tool'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Tool'])}}
<br>
{{Form::label('image', 'Image')}}
{{Form::text('image', null, ['placeholder' => 'images/'])}}
<br>
{{Form::label('url', 'URL')}}
{{Form::text('url', null, ['placeholder' => 'http://'])}}
<br>
{{Form::submit('Add Tool')}}
{{Form::close()}}
@stop