@extends('admin.form')

@section('form')
<h3>Add Project</h3>
{{Form::open(['url' => 'admin/project'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Tool'])}}
<br>
{{Form::label('url', 'URL')}}
{{Form::text('url', null, ['placeholder' => 'http://'])}}
<br>
{{Form::label('image', 'Image')}}
{{Form::text('image', null, ['placeholder' => 'images/'])}}
<br>
{{Form::label('description', 'Description')}}
{{Form::text('description', null, ['placeholder' => 'Description'])}}
<br>
{{Form::submit('Add Project')}}
{{Form::close()}}
@stop