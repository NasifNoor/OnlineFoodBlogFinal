<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index(Request $req){
    	$user = User::find($req->session()->get('id'));
        return view('Member.index', ['user'=>$user]);
    }
    public function editProfile(Request $req){
        $user = User::find($req->session()->get('id'));
    	return view('Member.editProfile', ['user'=>$user]);
    }
    public function updateInfo(Request $req){
        $validation = Validator::make($req->all(), [
            'name'=>'required',
            'contact'=>'required',
            'email'=> 'required',
            'address'=>'required',
        ])->validate();

        $user = User::find($req->session()->get('id'));
        $user->Name = $req->name;
        $user->contact = $req->contact;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->save();
        
        $req->session()->flash('msg', "Your Info is updated Successfully");

        return view('Member.index',  ['user'=>$user]);        
    }
    public function changePassword(Request $req){
        $user = User::find($req->session()->get('id'));
    	return view('Member.changePassword', ['user'=>$user]);
    }
    public function updatePassword(Request $req){
        $validation = Validator::make($req->all(), [
            'password'=>'required|min:3',
        ])->validate();

        $user = User::find($req->session()->get('id'));
        $user->password = $req->password;
        $user->save();
        
        $req->session()->flash('msg', "Your Password is updated Successfully");

        return view('Member.index',  ['user'=>$user]);        
    }
    public function availableRestaurant(){
        $res = Restaurant::all();
        return view('Member.availableRestaurant',['res'=> $res]);
    }




public function searchProduct(Request $request)
    {
        if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('restaurants')
         ->where('name', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data = DB::table('restaurants')->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->name.'</td>
         <td>'.$row->contact.'</td>
         <td>'.$row->address.'</td>
         <td>
            <a href="/details/'.$row->id.'" >Details</a> 
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="4">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       //'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }


}
