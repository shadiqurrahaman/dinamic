<?php

namespace App\Http\Controllers\Dashboard;

use App\AddressList;
use App\FileList;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class SuperadminController extends Controller
{	
	
    public function index()
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

    public function userManagement()
    {
        $users = User::all();
        return view('dashboard.userManagement')->with('users',$users);
    }

    public function editUser($id)
    {
        $user = User::find($id);

        return view('dashboard.editUser')->with('user',$user);
    }

    public function updateUser(Request $request)
    {


        $user = User::find($request->id);


        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password!=null){
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect('userManagement');
    }

    public function adduser()
    {
        return view('dashboard.adduser');
    }


}
