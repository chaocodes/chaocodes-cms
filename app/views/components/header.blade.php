<div id="login">
	{{HTML::link('admin', 'Admin')}}
</div>
<div id="header">
	<h1>{{HTML::link('/', 'CHAO//CODES')}}</h1>
	<h2>CHAO LAI</h2>
</div>
<div id="navbar" class="nav">
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
<div id="subnav" class="nav">
	<li>
		{{HTML::link('admin', 'ADMIN')}}
	</li>
	<li>
		{{HTML::link('admin/skill', 'SKILLS')}}
	</li>
	<li>
		{{HTML::link('admin/tool', 'TOOLS')}}
	</li>
	<li>
		{{HTML::link('admin/project', 'PROJECTS')}}
	</li>
	<li>
		{{HTML::link('admin/course', 'COURSES')}}
	</li>
	<li>
		{{Form::open(['url' => 'logout', 'class' => 'button-wrapper'])}}
		{{Form::submit('LOGOUT', ['class' => 'button-link'])}}
		{{Form::close()}}
	</li>
</div>
@endif
