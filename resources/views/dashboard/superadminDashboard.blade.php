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

		<div class="row">
			
			<div class="col-md-6">
				
					<div class="container">
    					<div class="card bg-light mt-3">
       						<div class="card-header">
           							 Batch Upload
        					</div>
	        				<div class="card-body">
	            				<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
	               					 @csrf
	               					 <input type="file" name="file" class="form-control">
	               					 <br>
	               					 <button class="btn btn-success">Import User Data</button>
	               
	            				</form>
	        				</div>
    					</div>
					</div>


			</div>
			<div class="col-md-6">

				<div class="container">
    					<div class="card bg-light mt-3">
       						<div class="card-header">
           							 Search by Address
        					</div>
	        				<div class="card-body" style="height: 106px;">
	            				<form class='search-form' method="POST" action="{{ route('search') }}">
                            		 @csrf
                           			 <input class='form-control' placeholder='Search with addess, postcode, zipcode' type='text' name='search' style="margin-top: 16px;">
                            		 <button class='btn btn-link search-btn' type="submit" style="color: #3e3737;margin:-7px;">
                           			 	<i class='fa fa-search'></i>
                           			 </button>
                        		</form>
	        				</div>
    					</div>
					</div>
				
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">

				<div class="container">
    					<div class="card bg-light mt-3">
       						<div class="card-header">
           							 Favorite List
        					</div>
	        				<div class="card-body" >
	            				
	        							<table class="table table-striped">
    										<thead>
											      <tr>
											        <th>Firstname</th>
											        <th>Lastname</th>
											        <th>Email</th>
											      </tr>
											    </thead>
											    <tbody>
											      <tr>
											        <td>John</td>
											        <td>Doe</td>
											        <td>john@example.com</td>
											      </tr>
											      <tr>
											        <td>Mary</td>
											        <td>Moe</td>
											        <td>mary@example.com</td>
											      </tr>
											      <tr>
											        <td>July</td>
											        <td>Dooley</td>
											        <td>july@example.com</td>
											      </tr>
											    </tbody>
											  </table>

	        				</div>
    					</div>
					</div>

			</div>
			<div class="col-md-6">
				<div class="container">
    					<div class="card bg-light mt-3">
       						<div class="card-header">
           							 Recent Batches
        					</div>
	        				<div class="card-body" >
	            				
	        							<table class="table table-striped">
    										<thead>
											      <tr>
											        <th>Date</th>
											        <th>Count</th>
											        <th>Name</th>
											        <th>Download</th>
											      </tr>
											    </thead>
											    <tbody>
											    	@foreach ($fileList as $file)
											      <tr>
											        <td>{{$file->uploaded_time}}</td>
											        <td>{{$file->adress_count}}</td>
											        <td>{{$file->file_name}}</td>
											        <td><a href="{{ url('export/'.$file->id) }}"><i class="fa fa-download" aria-hidden="true"></i></a></td>
											        
											      </tr>
											      @endforeach
											    </tbody>
											  </table>
											  {{ $fileList->links() }}

	        				</div>
    					</div>
					</div>

			</div>
			<div class="col-md-6">
				

				<div class="container">
    					<div class="card bg-light mt-3">
       						<div class="card-header">
           							 Recent search
        					</div>
	        				<div class="card-body" >
	            				
	        							<table class="table table-striped">
    										<thead>
											      <tr>
											        <th>Firstname</th>
											        <th>Lastname</th>
											        <th>Email</th>
											      </tr>
											    </thead>
											    <tbody>
											      <tr>
											        <td>John</td>
											        <td>Doe</td>
											        <td>john@example.com</td>
											      </tr>
											      <tr>
											        <td>Mary</td>
											        <td>Moe</td>
											        <td>mary@example.com</td>
											      </tr>
											      <tr>
											        <td>July</td>
											        <td>Dooley</td>
											        <td>july@example.com</td>
											      </tr>
											    </tbody>
											  </table>

	        				</div>
    					</div>
					</div>

			</div>
		</div>









		
	</div>



</div>





@endsection