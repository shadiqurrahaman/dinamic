<?php

namespace App\Http\Controllers;

use App\AddressInfo;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use App\AddressList;
use Helper;
use Auth;
use App\CallUser;
use mysql_xdevapi\Exception;


class SearchController extends Controller
{	
	
    public function index(Request $request)
    {

  		
    	// $value =  Cache::add($request->input('search'), 'value',now()->addYear(1));


        try {
            // Validate the value...

        $client = new \GuzzleHttp\Client();
        $googlestring = 'https://maps.googleapis.com/maps/api/geocode/json?';

        $address = 'address='.urlencode($request->input('search'));
        $key = '&key='.'AIzaSyBnSQ_kM3vMc0p2pjZkblR3osUx7sJ23kA';

        $finalurl = $googlestring.$address.$key;

        $is_valid_address = $client->request('GET',$finalurl);

        $array = json_decode($is_valid_address->getBody(), true);
        // dd($array['status']);
        // $valid_address = preg_match('/^\d.*.\d$/', $request->input('search'));

        
        if($array['status']=='OK'){

        if (Auth::check()) 
        {
            $user = Auth::user();

            $user->user_call = $user->user_call+1;
            $user->save();

            $CallUser = new CallUser;

            $CallUser->User_id = Auth::id();
            $CallUser->date = Carbon::now()->toDateTimeString();
            $CallUser->save();


        
        }

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

        // dd($addressinfo);
        $recomendentAddresses = AddressList::inRandomOrder()->limit(4)->get();
        return view('propertyResult')
            ->with('addressInfo',$addressinfo)
            ->with('recomendentAddresses',$recomendentAddresses);
    }
}
