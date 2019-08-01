<?php

namespace App\Http\Controllers;

use App\AddressInfo;
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
    	 	 

              $addressInfoId = Helper::apicall(null,$request->input('search'));

              Cache::add($request->input('search'), $addressInfoId ,now()->addYear(1));
    	 	 
    	}else{
    	
    		 $address = AddressList::where('address','=',$request->input('search'))->with('addressInfo')->first();
    		 $address->search_time = Carbon::now();
    		 $address->save();
             $addressInfoId = $address['addressInfo']->id;


    	}


        ///need to patch with property details page
        
//		dd($addressInfoId );


        return redirect()->route('propertyResult', ['propertyId' => $addressInfoId]);

    }

    public function propertyResult($propertyId)
    {
        $addressinfo = AddressList::where('id',$propertyId)->with('addressInfo')->first();

        $recomendentAddresses = AddressList::inRandomOrder()->limit(4)->get();
        return view('propertyResult')
            ->with('addressInfo',$addressinfo)
            ->with('recomendentAddresses',$recomendentAddresses);
    }
}
