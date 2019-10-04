<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminMain extends Controller
{
    function metod_insert(Request $request)
    {

    	if(isset($request->add) && !empty($request->record) && isset($request->size)
    	&& !empty($request->code) && !empty($request->rcode) && !empty($request->bcode))
    	{

    		$code = sprintf('%04d',$request->code);

    		//$size = number_format($request->size,2)
    		DB::table('testas')->insert(
    			['title' => $request->record,
    			 'size' => $request->size,
    			 'code' => $code,
    			 'rcode'=> $request->rcode,
    			 'bcode'=> $request->bcode
    		]
			);
    	}
    	$titles = DB::table('testas')->get();

    	$patch = $_ENV['APP_URL'];
    	return view('admin', compact('patch', 'titles'));
    }
}
