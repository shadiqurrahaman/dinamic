<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Imports\CsvImport;
use App\FileList;
Use App\AddressList;
// use Maatwebsite\Excel\Facades\Excel;
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
// dd($name);

         foreach ($data[0] as  $value) {
             # code...
            $addresslist = new AddressList;
            $addresslist->address =  $value[0];
            $addresslist->search_time = "ggg";
            $addresslist->vafourite = 'gdfgdfg';

            $filename->adress()->save($addresslist);
           
         }

        // return $data[0][1][0];

        

           
        return "Done";
    }

    public function export()
    {
        $all = FileList::with('adress')->get();

        return Excel::download( $all, 'invoices.csv');
    }
}
