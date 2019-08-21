@extends('Admin.layout.main')
@section('content')
    <h1> Add Restaurant</h1>
    <hr>
<form method="post">
    <table>
        <tr>
            <td>Name: </td>
            <td><input class="space" type="text" name="name" placeholder="{{ $errors->first('name')}}" ></td>
        </tr>
        <div>
            {{ $errors->first('name')}}
        </div>
        <tr>
            <td>Contact: </td>
            <td><input class="space" type="text" name="contact" placeholder="{{ $errors->first('contact')}}" ></td>
        </tr>
        <div>
            {{ $errors->first('contact')}}
        </div>
        <tr>
            <td>Address:</td>
            <td><input class="space" type="text" name="address" placeholder="{{ $errors->first('address')}}" ></td>
        </tr>
        <div>
            {{ $errors->first('address')}}
        </div>
        <tr>
            <td>Goal:</td>
            <td><input class="space" type="text" name="goal" placeholder="{{ $errors->first('goal')}}" ></td>
        </tr>
        <div>
            {{ $errors->first('goal')}}
        </div>
        <tr>
            <td>Description:</td>
            <td><textarea class="space" type="text" name="description" >{{ $errors->first('description')}} </textarea></td>
        </tr>
        <div>
            {{ $errors->first('description')}}
        </div>
        <tr>
            <td></td>
            <td><input type="submit" name="add" value="Add"></td>
        </tr>
</form>
@endsection