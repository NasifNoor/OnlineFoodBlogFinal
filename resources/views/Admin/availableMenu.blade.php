@extends('Admin.layout.main')
@section('content')

<script src="/js/jquery.min.js"></script>

	<h1>Available Restaurant</h1>
	<hr>
	<table border="1" class="table table-striped table-bordered">
		<tr class="text-center">
			<td><b>Name</b></td>
			<td><b>Price</b></td>
			<td><b>Action</b></td>
		</tr>
	  @foreach($menu as $value)
		<tr class="text-center">
			<td>{{$value['name']}}</td>
			<td>{{$value['price']}}</td>
			<td>
				<a href="/details/{{$value['id']}}">Details</a> |
				<a href="/order/{{$value['id']}}">Delete</a> |
				<a href="/cart/{{$value['id']}}">Update</a> 
				
			</td>
		</tr>
		@endforeach
    

@endsection