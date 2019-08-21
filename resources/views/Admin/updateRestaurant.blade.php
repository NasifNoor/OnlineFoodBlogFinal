
        <div>
            {{session('msg')}}
        </div>
    <h1> Update Restaurant</h1>
    <hr>
<form method="post">
    <table>
        <tr>
            <td>Name: </td>
            <td><input class="space" type="text" name="name" value="{{$res['name']}}" ></td>
        </tr>
        <tr>
            <td>Contact: </td>
            <td><input class="space" type="text" name="contact" value="{{$res['contact']}}" ></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input class="space" type="text" name="address" value="{{$res['address']}}" ></td>
        </tr>
        <tr>
            <td>Goal:</td>
            <td><input class="space" type="text" name="goal" value="{{ $res['goal']}}" ></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><textarea class="space" type="text" name="description"> {{ $res['description']}} </textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
</form>