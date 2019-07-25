@extends('layouts.app')

@section('content')

<!-- <h1>this is superadmin dashboard</h1> -->
<div class="wrapper">
	<!-- Sidebar  -->
	<nav id="sidebar">
		<div class="sidebar-header">
			<h3>Admin Panel</h3>
		</div>

		<ul class="list-unstyled components">
			<li> <a href="#">Dashboard</a> </li>			
			<li> <a href="#">Listing</a> </li>
			<li> <a href="#">Batch Upload</a> </li>
			<!-- <li class="active">
				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
				<ul class="collapse list-unstyled" id="homeSubmenu">
					<li>
						<a href="#">Home 1</a>
					</li>
					<li>
						<a href="#">Home 2</a>
					</li>
					<li>
						<a href="#">Home 3</a>
					</li>
				</ul>
			</li> -->
			
		</ul>

	</nav>

	<!-- Page Content  -->
	<div id="content">

		<div class="row">
			<div class="col-md-3">
				<div class="card-counter primary">
					<i class="fa fa-code-fork"></i>
					<span class="count-numbers">12</span>
					<span class="count-name">Flowz</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card-counter danger">
					<i class="fa fa-ticket"></i>
					<span class="count-numbers">599</span>
					<span class="count-name">Instances</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card-counter success">
					<i class="fa fa-database"></i>
					<span class="count-numbers">6875</span>
					<span class="count-name">Data</span>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card-counter info">
					<i class="fa fa-users"></i>
					<span class="count-numbers">35</span>
					<span class="count-name">Users</span>
				</div>
			</div>
		</div>

	</div>
</div>



@endsection