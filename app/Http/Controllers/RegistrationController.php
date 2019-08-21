<?php

namespace App\Http\Controllers;
use App\User;
use Validator;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registrationPage(){
    	return view('Registration.index');
    }
    public function register(Request  $req)
    {
    	$validation = Validator::make($req->all(), [
            'username'=>'required|unique:users',
            'password'=>'required|min:3',
            'userType'=>'required',
            'name'=>'required',
            'contact'=>'required|numeric',
            'email'=> 'required|regex:/^.+@.+$/i',
            'address'=>'required',
            'confirmPassword'=>'required|same:password',
		])->validate();
      
       
            $user  = new User();
            $user->username = $req->username; 
            $user->password = $req->password;
            $user->userType = $req->userType;
            $user->name = $req->name;
            $user->contact = $req->contact;
            $user->email = $req->email;
            $user->address = $req->address;
            $user->save();
        
            $req->session()->flash('msg', "A new User is added Successfully");
            
            return back();

    }
}
