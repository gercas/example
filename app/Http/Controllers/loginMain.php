<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;
use Auth;
class loginMain extends Controller
{
    function login(Request $request)
    {
    	$msg = array();

   		if(isset($request->login) && !empty($request->email) && !empty($request->pass))
        {
        	
			$hpass = Hash::make($request->pass);
    		DB::table('users')->insert(
    			['email' => $request->email,
    			 'password'=>$hpass
    			]
			);

            $user_data = array(
                'email'       => $request->get('email'),
                'password'    => $request->get('pass'),
            );
    
            if(Auth::attempt($user_data))
            {
               return redirect('/admin');
            }
            else
            {
                $msg[] = "<div class=\"alert alert-danger\">Bad login !</div>";
            }

    	}
        elseif(isset($request->login))
        {
            $msg[] = "<div class=\"alert alert-danger\">Empty fields !</div>";
        }
        //print_r($_POST);



    $patch = $_ENV['APP_URL'];
    return view('login', compact('patch', 'msg'));
    }
    function out(Request $request)
    {
    	$msg = array();
        Auth::logout();
        return redirect('/login');

    	$msg[] = "<div class=\"alert alert-danger\">Loged off !</div>";
    	$patch = $_ENV['APP_URL'];
    	return view('login', compact('patch', 'msg'));
    }
}
