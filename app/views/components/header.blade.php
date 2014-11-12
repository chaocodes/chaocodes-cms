<div id="header">
	<h1>{{HTML::link('/', 'CHAO//CODES')}}</h1>
	<h2>CHAO LAI</h2>
</div>
<div id="navbar">
	<ul>
		<li>
			{{HTML::link('/', 'HOME')}}
		</li>
		<li>
			{{HTML::link('projects', 'PROJECTS')}}
		</li>
		<li>
			{{HTML::link('resume', 'RESUME')}}
		</li>
		<li>
			{{HTML::link('courses', 'COURSES')}}
		</li>
</div>
@if (Auth::check())
<div id="subnav">
	<li>
		{{HTML::link('admin', 'ADMIN')}}
	</li>
	<li>
		{{HTML::link('admin/skill', 'SKILLS')}}
	</li>
	<li>
		{{HTML::link('admin', 'TOOLS')}}
	</li>
	<li>
		{{HTML::link('admin', 'PROJECTS')}}
	</li>
	<li>
		{{HTML::link('admin', 'COURSES')}}
	</li>
	<li>
		{{Form::open(array('url' => 'logout', 'class' => 'form'))}}
		{{Form::submit('LOGOUT', array('class' => 'button'))}}
		{{Form::close()}}
	</li>
</div>
@endif
