@extends('Admin.layout.main')
@section('content')

<script src="/js/jquery.min.js"></script>

	<h1>Member List</h1>
	<hr>
	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>User Name</b></td>
			<td><b>Name</b></td>
			<td><b>Contact No</b></td>
			<td><b>Email</b></td>
			<td><b>Address</b></td>
			<td><b>Action</b></td>
		</tr>
	  @foreach($user as $value)
		<tr class="text-center">
			<td>{{$value['username']}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['contact']}}</td>
			<td>{{$value['email']}}</td>
			<td>{{$value['address']}}</td>
			<td>
				<a href="/removeMember/{{$value['id']}}">Remove</a> 
				
			</td>
		</tr>
		@endforeach
    

@endsection