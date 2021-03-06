@extends('admin.view')

@section('thead')
<th>Name</th>
<th>Description</th>
<th>Category</th>
<th>Updated</th>
@stop

@section('tbody')
@foreach ($courses as $course)
<tr>
	<td>{{$course->name}}</td>
	<td>{{$course->description}}</td>
	<td>{{$course->category}}</td>
	<td>{{$course->updated_at->format('F d, Y h:ia') }}</td>
	<td>
		<a href="course/{{$course->id}}/edit">Edit</a>
		{{Form::open(['url' => 'admin/course/' . $course->id, 'method' => 'DELETE', 'class' => 'button-wrapper'])}}
		{{Form::submit('Delete', ['class' => 'button-link'])}}
		{{Form::close()}}
	</td>
</tr>
@endforeach
@stop

@section('addBtn')
<a href="course/create" class="button-add">Add Course</a>
@stop