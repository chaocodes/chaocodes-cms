@extends('admin.form')

@section('form')
<h3>Edit Project</h3>
{{Form::model($project, ['url' => 'admin/project/' . $project->id, 'method' => 'PUT'])}}
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
{{Form::submit('Edit Project')}}
{{Form::close()}}
@stop