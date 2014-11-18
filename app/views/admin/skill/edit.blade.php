@extends('admin.form')

@section('form')
<h3>Edit Skill</h3>
{{Form::model($skill, ['url' => 'admin/skill/' . $skill->id, 'method' => 'PUT'])}}
{{Form::label('skill', 'Skill')}}
{{Form::text('skill', null, ['placeholder' => 'Skill', 'class' => 'textbox'])}}
<br>
{{Form::label('experience', 'Experience')}}
{{Form::text('experience', null, ['placeholder' => '0', 'class' => 'textbox'])}}
<br>
{{Form::submit('Edit Skill', ['class' => 'button-link'])}}
{{Form::close()}}
@stop