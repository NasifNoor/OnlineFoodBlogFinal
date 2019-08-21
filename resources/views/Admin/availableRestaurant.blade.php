@extends('Admin.layout.main')
@section('content')

<script src="/js/jquery.min.js"></script>

	<h1>Available Restaurant</h1>
	<hr>
	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>Name</b></td>
			<td><b>Contact</b></td>
			<td><b>Address</b></td>
			<td><b>Action</b></td>
		</tr>
	  @foreach($res as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['contact']}}</td>
			<td>{{$value['address']}}</td>
			<td>
				<a href="/restaurant/{{$value['id']}}">Details</a> |
				<a href="/deleteRestaurant/{{$value['id']}}">Delete</a> |
				<a href="/updateRestaurant/{{$value['id']}}">Update</a> 
				
			</td>
		</tr>
		@endforeach
    

@endsection