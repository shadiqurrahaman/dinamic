<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Imports\ExportData;
use App\Imports\CsvImport;
use App\FileList;
Use App\AddressList;
use Excel;
use File;
use Carbon\Carbon;
use Helper;


class AdminController extends Controller
{

    public function index()
    {
        $fileList = FileList::orderBy('uploaded_time', 'desc')->withCount('adress')
            ->has('adress', '>', 0)
            ->paginate(5);
        $favoriteAddress = AddressList::where('favorite','1')->with('addressInfo')->paginate(5);
        $recentSearchAddress = AddressList::orderBy('search_time','desc')->with('addressInfo')->paginate(5);

//    	foreach ($addresses as $address){
//    	    return $address['addressInfo'];
//        }

        return view('dashboard.superadminDashboard')
            ->with('fileList',$fileList)
            ->with('favoriteAddress',$favoriteAddress)
            ->with('recentSearchAddress',$recentSearchAddress);
    }


    public function import(Request $request) 
    {
         $path = request()->file('file');

         if ($path==''){
             return back()->withErrors(['No File Selected']);
         }
         $fileName = $request->input('filename');

         if($fileName == ''){

             $name =$request->file->getClientOriginalName();
         }else{
             $name=$fileName.'.csv';
         }

         return $name;

         $data = \Excel::toArray(new CsvImport, $path);

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
            

            if(!Cache::has($value[0])){

                // $addresslist = new AddressList;
                // $addresslist->address =  $value[0];
                // $addresslist->search_time =  Carbon::now();
                // $addresslist->favorite = false;
                // $filename->adress()->save($addresslist);

                //then call to api

                $id = Helper::apicall($filename->id,$value[0]);

                Cache::add($value[0], $id ,now()->addYear(1));
            }
            
         }

        
        

           
        return back();
    }


    public function export($id)

    {
            $file = FileList::where('id','=',$id)->first();

            $addresslist = AddressList::select('address')->where('file_list_id','=',$file->id)->get();

          

            foreach ($addresslist as  $address) {
                $addressarray[] = $address->toArray();
            }
            
            $addressListToExport = new ExportData($addressarray);
           
            return Excel::download(  $addressListToExport, $file->file_name);
    }
}
