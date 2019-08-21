<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use App\Bloginfo;
use App\Menu;
use App\Restaurant;
use App\Restaurantmenu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $req){
    	$user = User::find($req->session()->get('id'));
        return view('Admin.index', ['user'=>$user]);
    }
    public function editProfile(Request $req){
        $ad = User::find($req->session()->get('id'));
    	return view('Admin.editProfile', ['ad'=>$ad]);
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

        return view('Admin.index',  ['user'=>$user]);        
    }
    public function changePassword(Request $req){
        $user = User::find($req->session()->get('id'));
    	return view('Admin.changePassword', ['user'=>$user]);
    }
    public function updatePassword(Request $req){
        $validation = Validator::make($req->all(), [
            'password'=>'required|min:3',
        ])->validate();

        $user = User::find($req->session()->get('id'));
        $user->password = $req->password;
        $user->save();
        
        $req->session()->flash('msg', "Your Password is updated Successfully");

        return view('Admin.index',  ['user'=>$user]);        
    }

    public function memberList(){
        $user = User::all()->where('usertype','member');
    	return view('Admin.memberList',['user'=> $user]);
    }
    public function removeMember(Request $req, $mid){
        User::destroy($mid);
        $req->session()->flash('msg', "You have successfully Remove a member");
        return redirect()->route('Admin.index');
      
    }
	public function blogInfo(){
		$id='1';
        $binfo = Bloginfo::find($id);
    	return view('Admin.blogInfo', ['binfo'=>$binfo]);
    }
    public function blogInfoUpdate(Request $req){
        $validation = Validator::make($req->all(), [
            'name'=>'required',
            'contact'=>'required',
            'creator'=>'required',
            'email'=> 'required',
            'goal'=>'required',
            'description'=>'required',
        ])->validate();

        $id='1';
        $binfo = Bloginfo::find($id);
        $binfo->name = $req->name;
        $binfo->creator = $req->creator;
        $binfo->contact = $req->contact;
        $binfo->email = $req->email;
        $binfo->goal = $req->goal;
        $binfo->description = $req->description;
        $binfo->save();
        
        $req->session()->flash('msg', "Blog's Info is updated Successfully");

        return redirect()->route('Admin.index');      
    }

    //Add Restaurent
    public function addRestaurant(){
    	return view('Admin.addRestaurant');
    }
    public function registerRestaurant(Request  $req)
    {
    	$validation = Validator::make($req->all(), [
            'name'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'goal'=>'required',
            'description'=>'required',
		])->validate();
      
       
            $res  = new Restaurant();
            $res->name = $req->name;
            $res->contact = $req->contact;
            $res->address = $req->address;
            $res->goal = $req->goal;
            $res->description = $req->description;
            $res->save();
        
            $req->session()->flash('msg', "A new Restaurent is added Successfully");
            
            return redirect()->route('Admin.index');

    }
    public function availableRestaurant(){
        $res = Restaurant::all();
    	return view('Admin.availableRestaurant',['res'=> $res]);
    }

//menu
    public function addMenu(){
    	return view('Admin.addMenu');
    }
    public function registerMenu(Request  $req)
    {
    	$validation = Validator::make($req->all(), [
            'name'=>'required',
            'price'=>'required',
		])->validate();
      
       
            $res  = new Menu();
            $res->name = $req->name;
            $res->price = $req->price;
            $res->save();
        
            $req->session()->flash('msg', "A new Item is added Successfully");
            
            return redirect()->route('Admin.index');

    }
    public function availableMenu(){
        $menu = Menu::all();
    	return view('Admin.availableMenu',['menu'=> $menu]);
    }
	public function deleteRestaurant(Request $req, $rid){
        Restaurant::destroy($rid);
        $req->session()->flash('msg', "You have successfully Remove a Restaurant");
        return redirect()->route('Admin.index');
    }

	public function updateRestaurant(Request $req, $rid){
        $res = Restaurant::find($rid);
    	return view('Admin.updateRestaurant', ['res'=>$res]);
    }
    public function updatedRestaurant(Request $req, $rid){
        $validation = Validator::make($req->all(), [
            'name'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'goal'=>'required',
            'description'=>'required',
        ])->validate();

        $user = Restaurant::find($rid);
        $user->name = $req->name;
        $user->contact = $req->contact;
        $user->address = $req->address;
        $user->goal = $req->goal;
        $user->description = $req->description;
        $user->save();
        
        $req->session()->flash('msg', "Your Password is updated Successfully");

        return redirect()->route('Admin.availableRestaurant');
    }

    public function restaurant(Request $req, $rid){
    	$user = Restaurant::find($rid);
    	$menu = Menu::All();
        return view('Admin.restaurant', ['user'=>$user, 'menu'=>$menu]);
    }

    public function addToRestaurant(Request  $req, $rid)
    {     
       		$menu = Menu::All()->where('name',$req->item);
            $res  = new Restaurantmenu();
            $res->menuid = $menu->id;
            $res->menuname = $menu->name;
            $res->restaurantid= $rid;
            $res->price  = $menu->price;
            $res->save();
        
            $req->session()->flash('msg', "A new Item is added To restaurent");
            
            return Back();

    }

}
