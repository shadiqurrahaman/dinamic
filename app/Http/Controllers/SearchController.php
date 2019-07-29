<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\AddressList;
use Helper;

class SearchController extends Controller
{	
	
    public function index(Request $request)
    {

  		
    	// $value =  Cache::add($request->input('search'), 'value',now()->addYear(1));

    	if(!Cache::has($request->input('search'))){
    	 	 

              $id = Helper::apicall(null,$request->input('search'));

    	 	 Cache::add($request->input('search'), $id ,now()->addYear(1));
    	 	 
    	}else{
    	
    		 $address = AddressList::where('address','=',$request->input('search'))->with('addressInfo')->first();
    		 $address->search_time = Carbon::now();
    		 $address->save();
            $id = $address['addressInfo']->id;


    	}


        ///need to patch with property details page
        
		dd($id );


		return "ok";

    }
}
