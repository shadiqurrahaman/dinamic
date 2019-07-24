<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Helper;

class SearchController extends Controller
{	
	
    public function index(Request $request)
    {

  		
    	// $value =  Cache::add($request->input('search'), 'value',now()->addYear(1));

    	if(!Cache::has($request->input('search'))){

    	 	 $id = Helper::apicall($request->input('search'));

    	 	 //save in database

    	 	 //save with id value

    	 	 Cache::add($request->input('search'), '1',now()->addYear(1));
    	 	 
    	}else{
    	
    		 $id = Cache::get($request->input('search'));

    	}


    	// return $data;

		dd($id);


		return "ok";

    }
}
