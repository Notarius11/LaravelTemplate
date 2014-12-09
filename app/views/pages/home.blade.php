@extends('layout')

@section('content')
	<div id="menuWrapper">
		<div id="news" class="menuSection">
			<h2>News</h2>
			<ul>
				<li>Create new</li>
				<li>Edit News</li>
			</ul>
		</div>
		<div id="events" class="menuSection">
			<h2>Events</h2>
			<ul>
				<li>Create new</li>
				<li>Edit Event</li>
				<li>Add Person</li>
				<li>View Registrations</li>
			</ul>
		</div>
		<div id="members" class="menuSection">
			<h2>Members</h2>
			<ul>
				<li>Create new</li>
				<li>Members List</li>
			</ul>
		</div>
	</div>
@stop