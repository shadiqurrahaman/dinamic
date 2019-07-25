<?php

namespace App\Http\Controllers\Dashboard;

use App\FileList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SuperadminController extends Controller
{	
	
    public function index(Request $request)
    {
    	$fileList = FileList::orderBy('uploaded_time', 'desc')->withCount('adress')->paginate(5);

    	
    	 return view('dashboard.superadminDashboard')->with('fileList',$fileList);
    }
}
