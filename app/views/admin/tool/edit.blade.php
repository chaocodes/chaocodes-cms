@extends('admin.form')

@section('form')
<h3>Edit Tool</h3>
{{Form::model($tool, ['url' => 'admin/tool/' . $tool->id, 'method' => 'PUT'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Tool', 'class' => 'textbox'])}}
<br>
{{Form::label('image', 'Image')}}
{{Form::text('image', null, ['placeholder' => 'images/', 'class' => 'textbox'])}}
<br>
{{Form::label('url', 'URL')}}
{{Form::text('url', null, ['placeholder' => 'http://', 'class' => 'textbox'])}}
<br>
{{Form::submit('Edit Tool', ['class' => 'button-link'])}}
{{Form::close()}}
@stop