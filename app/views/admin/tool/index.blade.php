@extends('admin.view')

@section('thead')
<th>Name</th>
<th>Image</th>
<th>URL</th>
<th>Updated</th>
@stop

@section('tbody')
@foreach ($tools as $tool)
<tr>
	<td>{{$tool->name}}</td>
	<td><img src="../{{$tool->image}}" alt="{{$tool->image}}"/></td>
	<td><a href="{{$tool->url}}">{{$tool->url}}</a></td>
	<td>{{$tool->updated_at->format('F d, Y h:ia') }}</td>
	<td>
		<a href="tool/{{$tool->id}}/edit">Edit</a>
		{{Form::open(['url' => 'admin/tool/' . $tool->id, 'method' => 'DELETE'])}}
		{{Form::submit('Delete')}}
		{{Form::close()}}
	</td>
</tr>
@endforeach
@stop

@section('addBtn')
<a href="tool/create">Add Tool</a>
@stop