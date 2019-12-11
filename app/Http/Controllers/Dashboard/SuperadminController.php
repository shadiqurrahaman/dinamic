<?php

namespace App\Http\Controllers\Dashboard;

use App\AddressList;
use App\FileList;
use App\CallUser;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;


class SuperadminController extends Controller
{	
	
    public function index()
    {
    	$fileList = FileList::orderBy('uploaded_time', 'desc')->withCount('adress')
    		->has('adress', '>', 0)
    		->paginate(5);
    	$addresses = AddressList::with('addressInfo')->get();


    	 return view('dashboard.superadminDashboard')
             ->with('fileList',$fileList)
             ->with('addresses',$addresses);
    }

    public function userManagement()
    {
        $users = User::all();

        // $user_per_day = DB::table('call_user')
        //                 ->select('user_id',DB::raw("count('date') as date" ))
        //                 ->groupby('user_id','date')
        //                 ->get();

        // $user_per_day = DB::select('select users.name,users.email,n.user_id,n.date  from (select t.user_id, sum(t.date) as date from ( select user_id,count(date) as date from call_user GROUP BY user_id, date) as t GROUP by t.user_id) as n left join Users on users.id =n.user_id');

          // $user_per_day = DB::select('select users.id,users.name,users.email,(n.date/n.total) as per_day from(select t.user_id,count(t.user_id) as total, sum(t.date) as date from ( select user_id,count(date) as date from call_user GROUP BY user_id, date) as t GROUP by t.user_id) as n Right JOIN Users on users.id=n.user_id');

         $user_per_day = DB::select('select users.id,users.name,users.email,tt.per_day,tt.per_month from (select dd.user_id,per_day,per_month from ((select d.user_id,(d.date/d.total) as per_day from(select t.user_id,count(t.user_id) as total, sum(t.date) as date from ( select user_id,count(date) as date from call_user GROUP BY user_id, date) as t GROUP by t.user_id) as d) as dd

            join (select m.user_id,(m.date/m.total) as per_month from (select t.user_id,count(t.user_id) as total,sum(t.date) as date from (select user_id,MONTH(date) as month,count(date) as date from call_user GROUP by user_id,month) as t GROUP BY t.user_id) as m) as mm on dd.user_id = mm.user_id)) as tt right JOIN users on users.id=tt.user_id 
            ');

         // $user_per_month  = DB::select('select m.user_id,(m.date/m.total) as per_month from (select t.user_id,count(t.user_id) as total,sum(t.date) as date from (select user_id,MONTH(date) as month,count(date) as date from call_user GROUP by user_id,month) as t GROUP BY t.user_id) as m');

        // return $user_per_day;
        return view('dashboard.userManagement')->with('users',$user_per_day);
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
