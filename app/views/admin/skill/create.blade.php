@extends('admin.form')

@section('form')
<h3>Add Skill</h3>
{{Form::open(['url' => 'admin/skill'])}}
{{Form::label('skill', 'Skill')}}
{{Form::text('skill', null, ['placeholder' => 'Skill'])}}
<br>
{{Form::label('experience', 'Experience')}}
{{Form::text('experience', null, ['placeholder' => '0'])}}
<br>
{{Form::submit('Add Skill')}}
{{Form::close()}}
@stop