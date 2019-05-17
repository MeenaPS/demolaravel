<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use validator;

use Auth;

class MainController extends Controller
{
    public function index()
    {
     return view('login');
    }

    public function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('main/successlogin');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    public function successlogin()
    {
       /*$user = Auth::user()->name; 
       print_r($user);*/
     return view('successlogin');
    }

    public function logout()
    {
     Auth::logout();
     return redirect('main');
    }




}
