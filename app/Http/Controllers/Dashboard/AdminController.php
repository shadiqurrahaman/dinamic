<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\ExportData;
use App\Imports\CsvImport;
use App\FileList;
Use App\AddressList;
use Excel;
use File;


class AdminController extends Controller
{	
	
    public function index()
    {
    	 
    	 return view('dashboard.admindashboard');
    }


    public function import(Request $request) 
    {
         $path =request()->file('file');
         $name =$request->file->getClientOriginalName();
         $data = \Excel::toArray(new CsvImport, $path);

            $filename = new FileList;

         $filename->file_name = $name;
         $filename->uploaded_time = "vv";
         $filename->save();


         foreach ($data[0] as  $value) {
             # code...
            $addresslist = new AddressList;
            $addresslist->address =  $value[0];
            $addresslist->search_time = "ggg";
            $addresslist->vafourite = 'gdfgdfg';

            $filename->adress()->save($addresslist);
           
         }

        
        

           
        return "Done";
    }


    public function export($id)

    {
            $file = FileList::where('id','=',$id)->first();

            $addresslist = AddressList::where('file_list_id','=',$file->id)->get();

            foreach ($addresslist as  $address) {
                $addressarray[] = $address->toArray();
            }
            
            $addressListToExport = new ExportData($addressarray);
           
            return Excel::download(  $addressListToExport, $file->file_name);
    }
}
