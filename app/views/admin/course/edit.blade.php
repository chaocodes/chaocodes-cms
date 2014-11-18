@extends('admin.form')

@section('form')
<h3>Edit Course</h3>
{{Form::model($course, ['url' => 'admin/course/' . $course->id, 'method' => 'PUT'])}}
{{Form::label('name', 'Name')}}
{{Form::text('name', null, ['placeholder' => 'Course', 'class' => 'textbox'])}}
<br>
{{Form::label('description', 'Description')}}
{{Form::text('description', null, ['placeholder' => 'Description', 'class' => 'textbox'])}}
<br>
{{Form::label('category', 'Category')}}
{{Form::select('category', ['cs' => 'Computer Science', 'math' => 'Math'], 'Computer Science', ['class' => 'textbox'])}}
<br>
{{Form::submit('Edit Course', ['class' => 'button-link'])}}
{{Form::close()}}
@stop