<?php

namespace App\Http\Controllers;

use App\AddressInfo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\AddressList;
use Helper;
use mysql_xdevapi\Exception;

class SearchController extends Controller
{	
	
    public function index(Request $request)
    {

  		
    	// $value =  Cache::add($request->input('search'), 'value',now()->addYear(1));


        try {
            // Validate the value...


        $valid_address = preg_match('/^\d.*.\d$/', $request->input('search'));

        
        if($valid_address!=0){



    	if(!Cache::has($request->input('search'))){
    	 	 

              $addressInfoId = Helper::apicall(null,$request->input('search'));



                  Cache::add($request->input('search'), $addressInfoId ,now()->addYear(1));


    	}else{
    	       
    		 $address = AddressList::where('address','=',$request->input('search'))->with('addressInfo')->first();
    		 $address->search_time = Carbon::now();
    		 $address->save();
             $addressInfoId = $address->id;
               // dd($addressInfoId);



    	}

        }else{
            return back()->withErrors(['erroraddress'=>'Please Provide a valid address']);
        }


        } catch (Exception $e) {

            return "oops something went wrong!! please reset the process and check your input";
         }


       // dd($addressInfoId);
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
