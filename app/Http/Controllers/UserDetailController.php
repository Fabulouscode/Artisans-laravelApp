<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use DB;
use Auth;
use App\UserDetail;
// use App\User;
class UserDetailController extends Controller
{
     public $avatar = "/images/";
     
    public function index(){
        $userDetails = DB::table('users')
        ->leftjoin('user_details', 'users.id', '=', 'user_details.userId')
        ->select('*')
        ->get();
        // return view('home')
        // ->with(['userDetail'=>$UserDetails]);
        return view('home')->with(['userDetails'=>$userDetails]);
    }

    
      public function create(){
        $user = Auth::user();
        // $posts = Post::all();
        return view('pages/editBioData',compact('user',$user));
    }
    public function profile(){
        $userD = DB::table('users')
        ->leftjoin('user_details', 'users.id', '=', 'user_details.userId')
        ->select('*')
        ->get();
        // return view('home')
        // ->with(['userDetail'=>$UserDetails]);
        return view('profile')->with(['userD'=>$userD]);
    }
    public function storeUserDetails(Request $request){
        $this->validate($request, [
            'phone' => 'required',
            'gender' => 'required',
            'hobbies' => 'required',
            'city' => 'required',
            'profession' => 'required'
        ]);

        $user = Auth::user();
        $userDetail = new UserDetail();
        $userDetail->userId = $user->id;
        $userDetail->phone = request('phone');
        $userDetail->gender = request('gender');
        $userDetail->hobbies = request('hobbies');
        $userDetail->city = request('city');
        $userDetail->whatUDo = request('profession');
        $userDetail->save();
 
        return redirect('/profile')
        ->with('success', 'User details added.');
        //return back()->with('success', 'Category added.');
    }
    public function show($id){
        
        $details = DB::table('users')
        ->leftjoin('user_details', 'users.id', '=', 'user_details.userId')->leftjoin('contacts', 'users.id', '=', 'contacts.userId')
        ->leftjoin('education', 'users.id', '=', 'education.userId', 'users.created_at', 'AS', 'CreatedDate')->where('users.id', '=', $id)
        ->select('*')
        ->get();
      //dd($details);
        $skills = DB::table('users')
        ->leftjoin('skills', 'users.id', '=', 'skills.userId')
        ->where('users.id', '=', $id)
        ->select('*')
        ->get();
        // dd($skills);
        //dd($skills);
        // ->join('contacts', 'users.id', '=', 'contacts.userId')
        // ->join('experiences', 'users.id', '=', 'experiences.userId')->join('education', 'users.id', '=', 'education.userId')
        // ->join('skills', 'users.id', '=', 'skills.userId')
        // return view('home')
        // ->with(['userDetail'=>$UserDetails]);
        return view('/userDetails', compact(['details', $details, 'skills', $skills]));
    }
    public function details($userId){
        // $id = $userId->id;
        // $details = DB::table('users')
        // ->leftjoin('user_details', 'users.id', '=', 'user_details.userId')->join('contacts', 'users.id', '=', 'contacts.userId')
        // ->join('experiences', 'users.id', '=', 'experiences.userId')->join('education', 'users.id', '=', 'education.userId')
        // ->join('skills', 'users.id', '=', 'skills.userId')->where('users.id', '=', $id)
        // ->select('*')
        // ->get();
        // // return view('home')
        // // ->with(['userDetail'=>$UserDetails]);
        // return view('userDetails')->with(['details'=>$details]);
    }

 public function showD()
    {
    $user = Auth::user();
    $id = $user->id;

      $userd = DB::table('users')
        ->join('user_details', 'users.id', '=', 'user_details.userId')
        ->where('users.id', '=', $id)
        ->get();
        $countContacts = count($contacts);
        return view('profile',compact(['userd',$userd]));
    }
      public function setAvatarAttribute($value){

        return $this->$avatar.$value;
    }

}