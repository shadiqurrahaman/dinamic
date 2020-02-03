<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\ExportData;
use App\Imports\CsvImport;
use App\FileList;
use App\User;
Use App\AddressList;
use App\AddressInfo;
use Excel;
use File;
use Carbon\Carbon;
use Helper;
use Auth;
use App\CallUser;


class AdminController extends Controller
{

    public function index()
    {
        $fileList = FileList::orderBy('uploaded_time', 'desc')->withCount('adress')
            ->has('adress', '>', 0)
            ->paginate(5);
        $favoriteAddress = AddressList::where('favorite','1')->with('addressInfo')->paginate(5);
        $recentSearchAddress = AddressList::orderBy('search_time','desc')->with('addressInfo')->paginate(5);

        $date = Carbon::now();

        //dashboard card information
        $month = $date->format('F');
        $total_property = AddressList::count();
        $total_user = User::count();
        $this_month_this_user = CallUser::whereMonth('date',$date->month)->where('User_id',Auth::id())->count();
        $this_month_all_user = CallUser::whereMonth('date',$date->month)->count();

        
        

        return view('dashboard.superadminDashboard')
            ->with('fileList',$fileList)
            ->with('favoriteAddress',$favoriteAddress)
            ->with('recentSearchAddress',$recentSearchAddress)
            ->with('month',$month)
            ->with('total_property',$total_property)
            ->with('total_user',$total_user)
            ->with('this_month_this_user',$this_month_this_user)
            ->with('this_month_all_user',$this_month_all_user)
            ;
    }


    public function import(Request $request) 
    {

         $path = request()->file('file');

         if ($path==''){
             return back()->withErrors(['filerror'=>'No File Selected']);
         }
         $fileName = $request->input('filename');

         if($fileName == ''){

             $name =$request->file->getClientOriginalName();
         }else{
             $name=$fileName.'.csv';
         }



         $data = \Excel::toArray(new CsvImport, $path);

         // return $data;

            $ifExistInDatabase = FileList::where('file_name','=',$name)->first();

            if($ifExistInDatabase){

                $splitname[] = explode(".",$name);
               
                $name = $splitname[0][0].'_'.rand(1,100).'.'.$splitname[0][1];
            }


            $filename = new FileList;

            $filename->file_name = $name;
            $filename->uploaded_time = Carbon::now();
            $filename->save();

            $counter = 0;

         foreach ($data[0] as  $value) {


            


            if ($counter>0){

            // $address = isset($value[0])?$value[0].',':'';
            $address = (isset($value[0])?$value[0].',':'').(isset($value[2])?$value[2].',':'').(isset($value[3])?$value[3].' '.$value[4]:'');



            // dd($address);

            // $address = implode(", ", $value);

            $valid_address = preg_match('/^\d.*.\d$/', $address);

            if($valid_address!=0){

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

            if(!Cache::has($address)){

                // $addresslist = new AddressList;
                // $addresslist->address =  $value[0];
                // $addresslist->search_time =  Carbon::now();
                // $addresslist->favorite = false;
                // $filename->adress()->save($addresslist);

                //then call to api


                $id = Helper::apicall($filename->id,$address);

                Cache::add($address, $id ,now()->addYear(1));
            }else{

            $add = AddressList::where('address',$address)->with('addressInfo')->first();


            // return $add->addressInfo;

            $split =explode(",", $address);

            $addressList = new AddressList;

            $addressList->address = $address;
            $addressList->search_time = Carbon::now();
            $addressList->favorite = false;
            $addressList->p_address = isset($split[0])?$split[0]:null;
            $addressList->p_address2 = null ;
            $addressList->p_city = isset($split[1])?$split[1]:null ;
            $state_and_zip = explode(" ", trim($split[2]));
            $addressList->p_state = isset($state_and_zip[0])?$state_and_zip[0]:null ;
            $addressList->p_zipcode = isset($state_and_zip[1])?$state_and_zip[1]:null ;
            $addressList->save();

     
            $appinfo = new AddressInfo;

            $appinfo->rent = $add->addressInfo->rent;
            $appinfo->rentRangeLow =$add->addressInfo->rentRangeLow;
            $appinfo->rentRangeHigh = $add->addressInfo->rentRangeHigh;
            $appinfo->hometype = $add->addressInfo->hometype;
            $appinfo->bedroom = $add->addressInfo->bedroom;
            $appinfo->bathroom = $add->addressInfo->bathroom;
            $appinfo->zestimate = $add->addressInfo->zestimate;
            $appinfo->last_sold_price =$add->addressInfo->last_sold_price;
            $appinfo->last_sold_date = $add->addressInfo->last_sold_date;
            $appinfo->home_details = $add->addressInfo->home_details;
            $appinfo->air_dna_anual_revinue = $add->addressInfo->air_dna_anual_revinue;
            $appinfo->air_dna_average_daily_ratr = $add->addressInfo->air_dna_average_daily_ratr;
            $appinfo->air_dna_accupancy =$add->addressInfo->air_dna_accupancy;
            $appinfo->rent_zestimate =$add->addressInfo->rent_zestimate;
            $appinfo->photo = $add->addressInfo->photo;
            $appinfo->pool_type =$add->addressInfo->pool_type;
            $appinfo->total_area_sq_feet =$add->addressInfo->total_area_sq_feet;
            $appinfo->valuation_value = $add->addressInfo->valuation_value;
            $appinfo->valuation_high = $add->addressInfo->valuation_high;
            $appinfo->valuation_low = $add->addressInfo->valuation_low;
            $appinfo->standardized_land_use_type = $add->addressInfo->standardized_land_use_type;
            $appinfo->yearBuilt = $add->addressInfo->yearBuilt;
            $appinfo->taxes_year = $add->addressInfo->taxes_year;
            $appinfo->taxes_amount = $add->addressInfo->taxes_amount;
            $appinfo->latatude = $add->addressInfo->latatude;
            $appinfo->longitude = $add->addressInfo->longitude;
            $appinfo->finishedSqFt = $add->addressInfo->finishedSqFt;
            $appinfo->lotSizeSqFt = $add->addressInfo->lotSizeSqFt;

             $addressList->addressInfo()->save($appinfo);




            }
            
         }else{

            $split =explode(",", $address);

            $addressList = new AddressList;

            $addressList->address = $address;
            $addressList->search_time = Carbon::now();
            $addressList->favorite = false;
            $addressList->p_address = isset($split[0])?$split[0]:null;
            $addressList->p_address2 = isset($split[1])?$split[1]:null ;
            $addressList->p_city = isset($split[2])?$split[2]:null ;
            $addressList->p_state = isset($split[3])?$split[3]:null ;
            $addressList->p_zipcode = isset($split[4])?$split[4]:null ;
            $addressList->file_list_id = $filename->id;
            $addressList->save();


            $appinfo = new AddressInfo;

            $appinfo->rent = null;
            $appinfo->rentRangeLow =null;
            $appinfo->rentRangeHigh = null;
            $appinfo->hometype = null;
            $appinfo->bedroom = null;
            $appinfo->bathroom = null;
            $appinfo->zestimate = null;
            $appinfo->last_sold_price =null;

            $appinfo->last_sold_date = null;
            $appinfo->home_details = null;
            $appinfo->air_dna_anual_revinue = null;
            $appinfo->air_dna_average_daily_ratr = null;
            $appinfo->air_dna_accupancy =null;
            $appinfo->rent_zestimate =null;
            $appinfo->photo = null;
            $appinfo->pool_type =null;
            $appinfo->total_area_sq_feet =null;
            $appinfo->valuation_value = null;
            $appinfo->valuation_high = null;
            $appinfo->valuation_low = null;
            $appinfo->standardized_land_use_type =null;
            $appinfo->yearBuilt = null;
            $appinfo->taxes_year = null;
            $appinfo->taxes_amount =null; 
            $appinfo->latatude = null;
            $appinfo->longitude = null;
            $appinfo->finishedSqFt = null;
            $appinfo->lotSizeSqFt = null;


             $addressList->addressInfo()->save($appinfo);

         }


            }

            $counter++;


         }

        
        

           
        return back();
    }


    public function export($id)

    {
            $file = FileList::where('id','=',$id)->first();

            // $addresslist = AddressList::where('file_list_id','=',$file->id)->with('addressInfo')->get();

            // return $addresslist;
          $addresslist = DB::table('address_lists')
            ->join('address_infos', 'address_lists.id', '=', 'address_infos.address_list_id')
            ->where( 'address_lists.file_list_id','=',$file->id)

            ->select('address_lists.p_address', 'address_lists.p_address2','address_lists.p_state', 'address_lists.p_city','address_lists.p_zipcode','address_infos.air_dna_anual_revinue',
                DB::raw("CONCAT((address_infos.air_dna_accupancy*100),'%') as accupancy"),
                DB::raw('CONCAT("$",address_infos.air_dna_average_daily_ratr) as air_dna_average_daily_ratr'))
            ->get();
           
            // return $addresslist;
            $addressarray[] = ['PropertyAddress','PropertyAddress2','PropertyCity','PropertyState','PropertyZip','Annual Revenue','Occupancy Rate','Average Nightly Rate'];
            foreach ($addresslist as  $address) {
                
                $addressarray[] = (array)$address;
            }
            
            
            $addressListToExport = new ExportData($addressarray);
           
            return Excel::download(  $addressListToExport, $file->file_name);
    }
}
