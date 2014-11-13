@extends('admin.form')

@section('form')
<h3>Add Course</h3>
{{Form::open(['url' => 'admin/course'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Course'])}}
<br>
{{Form::label('description', 'Description')}}
{{Form::text('description', null, ['placeholder' => 'Description'])}}
<br>
{{Form::label('category', 'Category')}}
{{Form::select('category', array('cs' => 'Computer Science', 'math' => 'Math'))}}
<br>
{{Form::submit('Add Course')}}
{{Form::close()}}
@stop