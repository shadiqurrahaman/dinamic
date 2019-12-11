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
// use App\CallUser;
// use Auth;
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


         foreach ($data[0] as  $value) {

            $address = implode(", ", $value);

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
            }
            
         }

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
