<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{	
	
    public function index(Request $request)
    {
    	 
    	 return view('dashboard.admindashboard');
    }
}
