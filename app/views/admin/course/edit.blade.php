@extends('admin.form')

@section('form')
<h3>Edit Course</h3>
{{Form::model($course, ['url' => 'admin/course/' . $course->id, 'method' => 'PUT'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Course'])}}
<br>
{{Form::label('description', 'Description')}}
{{Form::text('description', null, ['placeholder' => 'Description'])}}
<br>
{{Form::label('category', 'Category')}}
{{Form::select('category', array('cs' => 'Computer Science', 'math' => 'Math'))}}
<br>
{{Form::submit('Edit Course')}}
{{Form::close()}}
@stop