<?php
namespace App\Helpers;
use GuzzleHttp\Client;
use App\Apiinfo;

class Helper
{
	public static  function apicall($property)
	{
		$address = $property;

    	 $split = explode(',', $address,2);

		 $string = 'address='.urlencode($split[0]).'&citystatezip='.urlencode($split[1]);


		 $zillourl = 'https://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz17rs5qz1gjv_517ck&'.$string;

		 $client = new \GuzzleHttp\Client();

		 $response = $client->request('GET',$zillourl);

		 $xml = simplexml_load_string($response->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);

		 $json = json_encode($xml);

		 $array = json_decode($json, true);

		 $array_dot = array_dot($array);

		 $collection = collect($array);

    	 // return $collection['request']['address'];

    	 //save to database 

    	 $propertyData =  $collection['response']['results']['result'];

    	 // dd($propertyData);

    	 $appinfo = new Apiinfo;

    	 $appinfo->status = 'status';
    	 $appinfo->MLS ="MLS"; 
    	 $appinfo->price = "250000";
    	 $appinfo->photo = "photo.com";
    	 $appinfo->hometype = $propertyData['useCode'];
    	 $appinfo->bedroom = $propertyData['bedrooms'];
    	 $appinfo->bathroom = $propertyData['bathrooms'];
    	 $appinfo->finishedSqFt =$propertyData['finishedSqFt']; 
    	 $appinfo->lotSizeSqFt = 2435;
    	 $appinfo->yearBuilt = '2019-05-50';
    	 $appinfo->zestimate = '20000';
    	 $appinfo->rent_zestimate = "50000";
    	 $appinfo->last_sold_date ="2019-05-05"; 
    	 $appinfo->last_sold_price =25000; 
    	 $appinfo->save();

    	 return $appinfo->id;

	}
}