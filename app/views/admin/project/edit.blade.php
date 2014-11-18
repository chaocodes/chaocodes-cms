@extends('admin.form')

@section('form')
<h3>Edit Project</h3>
{{Form::model($project, ['url' => 'admin/project/' . $project->id, 'method' => 'PUT'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Project', 'class' => 'textbox'])}}
<br>
{{Form::label('url', 'URL')}}
{{Form::text('url', null, ['placeholder' => 'http://', 'class' => 'textbox'])}}
<br>
{{Form::label('image', 'Image')}}
{{Form::text('image', null, ['placeholder' => 'images/', 'class' => 'textbox'])}}
<br>
{{Form::label('description', 'Description')}}
{{Form::textarea('description', null, ['placeholder' => 'Description', 'class' => 'textbox'])}}
<br>
{{Form::submit('Edit Project', ['class' => 'button-link'])}}
{{Form::close()}}
@stop