@extends('Admin.layout.main')
@section('content')
	<div>
    	{{session('msg')}}
  	</div>
	<h1> Blog Info</h1>
	<hr>
<form method="post">
	<table>
		<tr>
			<td>Name: </td>
			<td><input type="text" name="name" value="{{$binfo['name']}}"></td>
		</tr>
		<div>
			{{ $errors->first('name')}}
		</div>
		<tr>
			<td>Creator Name: </td>
			<td><input type="text" name="creator" value="{{$binfo['creator']}}"></td>
		</tr>
		<div>
			{{ $errors->first('creator')}}
		</div>
		<tr>
			<td>Phone No:</td>
			<td><input type="text" name="contact" value="{{$binfo['contact']}}"></td>
		</tr>
		<div>
			{{ $errors->first('contact')}}
		</div>
		<tr>
			<td>Email: </td>
			<td><input type="text" name="email" value="{{$binfo['email']}}"></td>
		</tr>
		<div>
			{{ $errors->first('email')}}
		</div>
		<tr>
			<td>Goal: </td>
			<td><input type="text" name="goal" value="{{$binfo['goal']}}"></td>
		</tr>
		<div>
			{{ $errors->first('goal')}}
		</div>
		<tr>
			<td>Description: </td>
			<td><textarea type="text" name="description">{{$binfo['description']}}</textarea> </td>
		</tr>
		<div>
			{{ $errors->first('description')}}
		</div>
		<tr>
			<td></td>
			<td><input type="submit" name="update" value="Update"></td>
		</tr>
	</table>
</form>
@endsection