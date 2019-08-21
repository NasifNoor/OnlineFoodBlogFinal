
	<div>
    	{{session('msg')}}
  	</div>
	<h1>Restaurant Details</h1>
	<hr>
	<table>
		<tr>
			<td>Name :</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Contact :</td>
			<td>{{$user['contact']}}</td>
		</tr>
		<tr>
			<td>Address :</td>
			<td>{{$user['address']}}</td>
		</tr>
		<tr>
			<td>Goal : </td>
			<td>{{$user['goal']}}</td>
		</tr>
		<tr>
			<td>Description: </td>
			<td>{{$user['description']}}</td>
		</tr>
	</table>

	<h1>Add Menu to {{$user['name']}}</h1>
	<hr>
	<form  method="post">
	<table>
		<tr>
			<td>Menu :</td>
			<td>
				<select type="text" name="item">
				  @foreach($menu as $value)
		          <option value="{{$value['name']}}">{{$value['name']}}</option>  
		          @endforeach
		        </select> 
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add" value="Add"></td>
		</tr>
	</table>

	</form>