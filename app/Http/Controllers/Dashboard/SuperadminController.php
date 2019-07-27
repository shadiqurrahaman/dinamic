<?php

namespace App\Http\Controllers\Dashboard;

use App\AddressList;
use App\FileList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SuperadminController extends Controller
{	
	
    public function index(Request $request)
    {
    	$fileList = FileList::orderBy('uploaded_time', 'desc')->withCount('adress')
    		->has('adress', '>', 0)
    		->paginate(5);
    	$addresses = AddressList::with('addressInfo')->get();

//    	foreach ($addresses as $address){
//    	    return $address['addressInfo'];
//        }

    	 return view('dashboard.superadminDashboard')->with('fileList',$fileList)->with('addresses',$addresses);
    }
}
