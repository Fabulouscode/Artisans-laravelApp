<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        // if($user->role == 'Admin'){
        //      return view('adminhome',compact('user',$user));
        // }
        return view('home',compact('user',$user));
    }
        public function search(Request $resquest){
            $city = $resquest->get('city');
            $profession = $resquest->get('profession');
          $userDetails = DB::table('user_details')
         ->where('city', 'like', '%'. $city.'%')->where('profession', 'like','%'. $profession.'%')
         ->get();
         $countSearch = count($userDetails);
         return view('home', compact(['userDetails', $userDetails, 'countSearch', $countSearch]));
    }
    
}