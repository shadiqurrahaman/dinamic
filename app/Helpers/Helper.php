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



        // $split =explode(",", $property);

        // dd($split);

        $addressList = new AddressList;

        // $addressList->address = $property;
        // $addressList->search_time = Carbon::now();
        // $addressList->favorite = false;
        // $addressList->p_address = isset($split[0])?$split[0]:null;
        // $addressList->p_address2 = isset($split[1])?$split[1]:null ;
        // $addressList->p_city = isset($split[2])?$split[2]:null ;
        // $addressList->p_state = isset($split[3])?$split[3]:null ;
        // $addressList->p_zipcode = isset($split[4])?$split[4]:null ;

        // if($file_list_id!=null){

        //     $filelist = FileList::find($file_list_id);
        //     $filelist->adress()->save($addressList);
        // }else{
        //      $addressList->file_list_id = $file_list_id;
        //      $addressList->save();
        // }

        

        // dd($address);



         // dd($address);
        if (strpos($property, ',') !== false) {

            //address with comma
            $split =explode(",", $property);
            $addressList->address = $property;
            $addressList->search_time = Carbon::now();
            $addressList->favorite = false;
            $addressList->p_address = isset($split[0])?$split[0]:null;
            $addressList->p_address2 = isset($split[1])?$split[1]:null ;
            $addressList->p_city = isset($split[2])?$split[2]:null ;
            $addressList->p_state = isset($split[3])?$split[3]:null ;
            $addressList->p_zipcode = isset($split[4])?$split[4]:null ;

        if($file_list_id!=null){

            $filelist = FileList::find($file_list_id);
            $filelist->adress()->save($addressList);
        }else{
             $addressList->file_list_id = $file_list_id;
             $addressList->save();
        }

            // dd($split);
            $state_zip = explode(' ',$split[2]);
            // dd($state_zip);
            $address_estade = 'street_address='.$split[0].'&city='.$split[1].'&state='.$state_zip[1].'&zip_code='.$state_zip[2];
            // dd($address_estade);
            $split2 = explode(',', $property,2);
            $string_for_zillow = 'address='.urlencode($split2[0]).'&citystatezip='.urlencode($split2[1]);



        }else{

            //address without comma

            $split = explode(' ', $property);


            $lenth =sizeof($split)-1;
            $add = '';
            for ($i=0;$i<=$lenth-3;$i++){
                $add=$add.' '.$split[$i];
            }
            $city2 = '';
            for($i=$lenth-2;$i<=$lenth;$i++){
                $city2 = $city2.' '.trim($split[$i]);
            }
            $city = $split[$lenth-2];
            $state = $split[$lenth-1];
            $zip = $split[$lenth];
        


            // $split =explode(",", $property);
            $addressList->address = $property;
            $addressList->search_time = Carbon::now();
            $addressList->favorite = false;
            $addressList->p_address = isset($add)?$add:null;
            $addressList->p_address2 = null ;
            $addressList->p_city = isset($city)?$city:null ;
            $addressList->p_state = isset($state)?$state:null ;
            $addressList->p_zipcode = isset($zip)?$zip:null ;

        if($file_list_id!=null){

            $filelist = FileList::find($file_list_id);
            $filelist->adress()->save($addressList);
        }else{
             $addressList->file_list_id = $file_list_id;
             $addressList->save();
        }
          
              $address_estade = 'street_address='.$add.'&city='.$city.'&state='.$state.'&zip_code='.$zip;
            $string_for_zillow = 'address='.urlencode(trim($add)).'&citystatezip='.urlencode(trim($city2));
            
        }


   //  	 $split = explode(',', $address,2);

		 // $string = 'address='.urlencode($split[0]).'&citystatezip='.urlencode($split[1]);

        $address = 'address='.urlencode($property);
         // dd($address);
        //airdna response
        try{
        $airdna_api_string = 'https://api.airdna.co/client/v1/rentalizer/ltm?access_token=2c4b008762ca4e8cb9845f8dbf12d35e&address='.$address;
        $client = new \GuzzleHttp\Client();
        $airdna_property_result = $client->request('GET',$airdna_api_string);
        $array = json_decode($airdna_property_result->getBody(), true);
        $airdna_property_data = $array['property_stats'];
        }catch(\Exception $e){
            $airdna_property_data  = array();
        }


        // dd($airdna_property_data);

        try {
        //zillow property data
        $zillourl = 'https://www.zillow.com/webservice/GetDeepSearchResults.htm?zws-id=X1-ZWz1ha147usbuz_8clop&'.$string_for_zillow;
       
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET',$zillourl);

        $xml = simplexml_load_string($response->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, true);
        $collection = collect($array);
        $propertyData =  $collection['response']['results']['result'];
        }catch (\Exception $e){
            $propertyData = array();
//            return $e->getMessage();
        }
        // update property result
        // $updated_search_result_string = 'https://www.zillow.com/webservice/GetUpdatedPropertyDetails.htm?zws-id=X1-ZWz1ha147usbuz_8clop&zpid=48749425';
        // $update_search_result = $client->request('POST',$updated_search_result_string);
        // $xml_result = simplexml_load_string($update_search_result->getBody(),'SimpleXMLElement',LIBXML_NOCDATA);
        // $json_result = json_encode($xml_result);
        // $array = json_decode($json_result, true);
        // $update_collection = collect($array);
        // $update_property_data = $update_collection['response'];
        //Estated
        try{
        $estated = 'https://apis.estated.com/v4/property?token=HuwT9a1eiCT3FcLZ98mnxGbE4ZRpUG&'.$address_estade;

        $client = new \GuzzleHttp\Client();
        $response2 = $client->request('GET',$estated);

        $response2 = json_decode($response2->getBody());

        $estated_data = $response2->data;


        }catch (\Exception $e){
            $estated_data = array();
//            return $e->getMessage();
        }
        // dd($estated_data);
  
    	 $appinfo = new AddressInfo;

        $appinfo->status = 'status';
        $appinfo->MLS ="MLS";
        $appinfo->price = "250000";
        $appinfo->hometype = isset($propertyData['useCode'])?$propertyData['useCode']:null;
        $appinfo->bedroom = isset($propertyData['bedrooms'])?$propertyData['bedrooms']:null;
        $appinfo->bathroom = isset($propertyData['bathrooms'])?$propertyData['bathrooms']:null;
        $appinfo->zestimate =1200;
        $appinfo->last_sold_price =isset($propertyData['lastSoldPrice'])?$propertyData['lastSoldPrice']:null;
        $appinfo->last_sold_date = \Carbon\Carbon::parse(isset($propertyData['lastSoldDate'])?$propertyData['lastSoldDate']:'20-12-2020')->format('Y/m/d');
        $appinfo->home_details = isset($propertyData['links']['homedetails'])?$propertyData['links']['homedetails']:null;
        $appinfo->air_dna_anual_revinue = isset($airdna_property_data['revenue']['ltm'])?$airdna_property_data['revenue']['ltm']:null;
        $appinfo->air_dna_average_daily_ratr =isset($airdna_property_data['adr']['ltm'])?$airdna_property_data['adr']['ltm']:null;
        $appinfo->air_dna_accupancy =isset($airdna_property_data['occupancy']['ltm'])?$airdna_property_data['occupancy']['ltm']:null;
        $appinfo->rent_zestimate = "50000";
        $appinfo->photo = null;

        $appinfo->pool_type = isset($estated_data->structure->pool_type)?$estated_data->structure->pool_type:null;
        $appinfo->total_area_sq_feet = isset($estated_data->structure->total_area_sq_ft)?$estated_data->structure->total_area_sq_ft:null;
        $appinfo->valuation_value = isset($estated_data->valuation->value)?$estated_data->valuation->value:null;
        $appinfo->valuation_high = isset($estated_data->valuation->high)?$estated_data->valuation->high:null;
        $appinfo->valuation_low = isset($estated_data->valuation->low)?$estated_data->valuation->low:null;
        $appinfo->standardized_land_use_type = isset($estated_data->parcel->standardized_land_use_type)?$estated_data->parcel->standardized_land_use_type:null;
        $appinfo->yearBuilt = isset($estated_data->structure->year_built)?$estated_data->structure->year_built:null;
        $appinfo->taxes_year = isset($estated_data->taxes[0]->year)?$estated_data->taxes[0]->year:null;
        $appinfo->taxes_amount = isset($estated_data->taxes[0]->amount)?$estated_data->taxes[0]->amount:null;
        $appinfo->latatude = isset($estated_data->address->latitude)?$estated_data->address->latitude:null;
        $appinfo->longitude =isset($estated_data->address->longitude)?$estated_data->address->longitude:null;

        // $appinfo->finishedSqFt =$update_collection['response']['editedFacts']['finishedSqFt']?$update_collection['response']['editedFacts']['finishedSqFt']:null;
        // $appinfo->lotSizeSqFt = $update_collection['response']['editedFacts']['lotSizeSqFt']?$update_collection['response']['editedFacts']['lotSizeSqFt']:null;
          $appinfo->finishedSqFt = null;
        $appinfo->lotSizeSqFt = null;

    	  // dd($appinfo);
         $addressList->addressInfo()->save($appinfo);

    	 return $addressList->id;

	}
}