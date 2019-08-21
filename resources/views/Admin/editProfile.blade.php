@extends('Admin.layout.main')
@section('content')
	<h1> Edit Profile</h1>
	<hr>
<form method="post">
	<table>
		<tr>
			<td>Username: </td>
			<td>{{$ad['username']}}</td>
		</tr>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" value="{{$ad['name']}}"></td>
		</tr>
		<div>
			{{ $errors->first('name')}}
		</div>
		<tr>
			<td>Phone No:</td>
			<td><input type="text" name="contact" value="{{$ad['contact']}}"></td>
		</tr>
		<div>
			{{ $errors->first('contact')}}
		</div>
		<tr>
			<td>Email: </td>
			<td><input type="text" name="email" value="{{$ad['email']}}"></td>
		</tr>
		<div>
			{{ $errors->first('email')}}
		</div>
		<tr>
			<td>Address: </td>
			<td><input type="text" name="address" value="{{$ad['address']}}"></td>
		</tr>
		<div>
			{{ $errors->first('address')}}
		</div>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Update"></td>
		</tr>
</form>
@endsection