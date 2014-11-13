@extends('admin.form')

@section('form')
<h3>Edit Tool</h3>
{{Form::model($tool, ['url' => 'admin/tool/' . $tool->id, 'method' => 'PUT'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Tool'])}}
<br>
{{Form::label('image', 'Image')}}
{{Form::text('image', null, ['placeholder' => 'images/'])}}
<br>
{{Form::label('url', 'URL')}}
{{Form::text('url', null, ['placeholder' => 'http://'])}}
<br>
{{Form::submit('Edit Tool')}}
{{Form::close()}}
@stop