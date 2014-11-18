@extends('admin.view')

@section('thead')
<th>Skill</th>
<th>Experience</th>
<th>Updated</th>
@stop

@section('tbody')
@foreach ($skills as $skill)
<tr>
	<td>{{$skill->skill}}</td>
	<td>{{$skill->experience}}</td>
	<td>{{$skill->updated_at->format('F d, Y h:ia') }}</td>
	<td>
		<a href="skill/{{$skill->id}}/edit">Edit</a>
		{{Form::open(['url' => 'admin/skill/' . $skill->id, 'method' => 'DELETE', 'class' => 'button-wrapper'])}}
		{{Form::submit('Delete', ['class' => 'button-link'])}}
		{{Form::close()}}
	</td>
</tr>
@endforeach
@stop

@section('addBtn')
<a href="skill/create" class="button-add">Add Skill</a>
@stop