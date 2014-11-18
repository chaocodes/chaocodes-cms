@extends('admin.view')

@section('thead')
<th>Name</th>
<th>URL</th>
<th>Image</th>
<th>Description</th>
<th>Updated</th>
@stop

@section('tbody')
@foreach ($projects as $project)
<tr>
	<td>{{$project->name}}</td>
	<td><a href="{{$project->url}}">{{$project->url}}</a></td>
	<td><img src="../{{$project->image}}" width="200px" height="100%" alt="{{$project->image}}"/></td>
	<td>{{$project->description}}</td>
	<td>{{$project->updated_at->format('F d, Y h:ia') }}</td>
	<td>
		<a href="project/{{$project->id}}/edit">Edit</a>
		{{Form::open(['url' => 'admin/project/' . $project->id, 'method' => 'DELETE', 'class' => 'button-wrapper'])}}
		{{Form::submit('Delete', ['class' => 'button-link'])}}
		{{Form::close()}}
	</td>
</tr>
@endforeach
@stop

@section('addBtn')
<a href="project/create" class="button-add">Add Project</a>
@stop