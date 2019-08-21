@extends('Admin.layout.main')
@section('content')
    <h1> Add Menu</h1>
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
            <td>Price: </td>
            <td><input class="space" type="text" name="price" placeholder="{{ $errors->first('price')}}" ></td>
        </tr>
        <div>
            {{ $errors->first('price')}}
        </div>
        <tr>
            <td></td>
            <td><input type="submit" name="add" value="Add"></td>
        </tr>
</form>
@endsection