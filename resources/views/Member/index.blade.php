@extends('Member.layout.main')
@section('content')
	<div>
    	{{session('msg')}}
  	</div>
	<h1>Customer page</h1>
	<hr>
	<table>
		<tr>
			<td>Name :</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$user['username']}}</td>
		</tr>
		<tr>
			<td>Phone no :</td>
			<td>{{$user['contact']}}</td>
		</tr>
		<tr>
			<td>Email : </td>
			<td>{{$user['email']}}</td>
		</tr>
		<tr>
			<td>Address: </td>
			<td>{{$user['address']}}</td>
		</tr>
	</table>
@endsection