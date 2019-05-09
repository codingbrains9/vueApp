<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Hash;
use Validator;
class FrontendController extends Controller
{
    //

    public function index(){

    	if(Auth::check()){

    		return view('app.home');

    	}else{
    		return view('welcome');
    	}
        //return view('index');
    }

    public function loginnow(Request $request){

    	return json_encode($request->all());

    }

    public function register_now(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email',
        ]);

        if ($validator->fails()) {
            
            return json_encode(['success'=>false,'errors'=>$validator->errors()]);

        }else{


        	$user = new User();
        	$user->name = $request->name; 
        	$user->email = $request->email; 
        	$user->phone = $request->mobile; 
        	$user->password = Hash::make($request->password); 
        	$user->user_type = $request->user_type; 
        	if($user->save()){
        		return json_encode(['success'=>true]);
        	}else{
        		return json_encode($request->name);
            }
        }
    	

    }

}
