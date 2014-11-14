@extends('pages.master')

@section('content')
<div id="admin" class="content">
<table style="width:100%">
	<thead>
		<tr>
			@yield('thead')
			<th></th>
		</tr>
	</thead>
	<tbody>
		@yield('tbody')
	</tbody>
</table>
@yield('addBtn')
</div>
@stop
