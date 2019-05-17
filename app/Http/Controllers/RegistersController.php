<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate; //model name 'Candidate under App folder'
use App\User; //model name 'Candidate under App folder'

class RegistersController extends Controller
{
    //
	public function register(Request $request){
    	$this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $users = new User;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->phone_no = $request->input('phone_no');
        $users->password = bcrypt($request->input('password'));
        
        $users->save();
        return redirect('/home')->with('response', 'Register Successfully');
	}



}
