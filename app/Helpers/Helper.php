<?php
namespace App\Helpers;
use GuzzleHttp\Client;
use App\AddressList;
use App\AddressInfo;
use App\FileList;
use Carbon\Carbon;
use mysql_xdevapi\Exception;

class Helper
{
	public static  function apicall($file_list_id = null,$property)
	{




//        $addressList = new AddressList;
//
//        $addressList->address = $property;
//        $addressList->search_time = Carbon::now();
//        $addressList->favorite = false;
//
//        if($file_list_id!=null){
//
//            $filelist = FileList::find($file_list_id);
//            $filelist->adress()->save($addressList);
//        }else{
//             $addressList->file_list_id = $file_list_id;
//             $addressList->save();
//        }

        

        $address = $property;

    	 $split = explode(',', $address,2);

		 $string = 'address='.urlencode($split[0]).'&citystatezip='.urlencode($split[1]);


        //airdna response
        $airdna_api_string = 'https://api.airdna.co/client/v1/rentalizer/ltm?access_token=2c4b008762ca4e8cb9845f8dbf12d35e&address='.$address;
        $client = new \GuzzleHttp\Client();
        $airdna_property_result = $client->request('GET',$airdna_api_string);
        $array = json_decode($airdna_property_result->getBody(), true);
        $airdna_property_data = $array['property_stats'];

        //zillow property data
        $zillourl = 'https://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz1ha147usbuz_8clop&'.$string;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET',$zillourl);
        $xml = simplexml_load_string($response->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, true);
        $collection = collect($array);
        $propertyData =  $collection['response']['results']['result'];

        // update property result
        $updated_search_result_string = 'https://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm?zws-id=X1-ZWz1ha147usbuz_8clop&zpid=48749425';
        $update_search_result = $client->request('POST',$updated_search_result_string);
        $xml_result = simplexml_load_string($update_search_result->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);
        $json_result = json_encode($xml_result);
        $array = json_decode($json_result, true);
        $update_collection = collect($array);
        $update_property_data = $update_collection['response'];

//        dd($airdna_property_data);
//        dd($propertyData);
        dd($update_property_data);


    	 $appinfo = new AddressInfo;

    	 $appinfo->status = 'status';
    	 $appinfo->MLS ="MLS"; 
    	 $appinfo->price = "250000";
    	 $appinfo->photo = $update_collection['response']['images']['image']['url']?$update_collection['response']['images']['image']['url']:null;
    	 $appinfo->hometype = $propertyData['useCode']?$propertyData['useCode']:null;
    	 $appinfo->bedroom = $propertyData['bedrooms']?$propertyData['bedrooms']:null;
    	 $appinfo->bathroom = $propertyData['bathrooms']?$propertyData['bathrooms']:null;
    	 $appinfo->finishedSqFt =$update_collection['response']['editedFacts']['finishedSqFt']?$update_collection['response']['editedFacts']['finishedSqFt']:null;
    	 $appinfo->lotSizeSqFt = $update_collection['response']['editedFacts']['lotSizeSqFt']?$update_collection['response']['editedFacts']['lotSizeSqFt']:null;
    	 $appinfo->yearBuilt = $update_collection['response']['editedFacts']['yearBuilt']?$update_collection['response']['editedFacts']['yearBuilt']:null;
    	 $appinfo->zestimate = $propertyData['zestimate']['amount']?$propertyData['zestimate']['amount']:null;
    	 $appinfo->rent_zestimate = "50000";
    	 $appinfo->last_sold_date =$propertyData['lastSoldDate']?$propertyData['lastSoldDate']:null;
    	 $appinfo->last_sold_price =$propertyData['lastSoldPrice']?$propertyData['lastSoldPrice']:null;

         $addressList->addressInfo()->save($appinfo);
    	 

    	 return $appinfo->id;

	}
}