@extends('admin.form')

@section('form')
<h3>Add Skill</h3>
{{Form::open(['url' => 'admin/skill'])}}
{{Form::label('skill', 'Skill')}}
{{Form::text('skill', null, ['placeholder' => 'Skill', 'class' => 'textbox'])}}
<br>
{{Form::label('experience', 'Experience')}}
{{Form::text('experience', null, ['placeholder' => '0', 'class' => 'textbox'])}}
<br>
{{Form::submit('Add Skill', ['class' => 'button-link'])}}
{{Form::close()}}
@stop