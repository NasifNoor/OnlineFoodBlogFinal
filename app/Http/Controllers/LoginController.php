<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function loginPage(){
    	return view('Login.index');
    }
    public function verify(Request $req){	
        if($req->userType == 'admin'){
            $validation = Validator::make($req->all(), [
                'userType'=>'required',
                'username'=>'required',
                'password'=>'required',
            ])->validate();

    		$result = DB::table('users')->where('username', $req->username)
    		->where('password', $req->password)
    		->where('userType', $req->userType)
    		->get();

    		
    		if(count($result) > 0){
    			$req->session()->put('user', $req->username);
    			$req->session()->put('id', $result[0]->id);
    			return redirect()->route('Admin.index');
    		}else{
    			$req->session()->flash('msg', 'invalid username or password');
    			return redirect()->route('Login.index');
    			//return view('login.index');
    		}
        }else if($req->userType == 'member'){
            $validation = Validator::make($req->all(), [
                'userType'=>'required',
                'username'=>'required',
                'password'=>'required',
            ])->validate();

            $result = DB::table('users')->where('username', $req->username)
            ->where('password', $req->password)
            ->where('userType', $req->userType)
            ->get();

            
            if(count($result) > 0){
                $req->session()->put('user', $req->username);
                $req->session()->put('id', $result[0]->id);
                return redirect()->route('Member.index');
            }else{
                $req->session()->flash('msg', 'invalid username or password');
                return view('Login.index');
                //return view('login.index');
            }

        }

	}
}
