<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Imports\CsvImport;
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
        $data = \Excel::toArray(new CsvImport, $path);
           
        return $data[0][0][1];
    }
}
