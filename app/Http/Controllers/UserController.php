<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Auth;
use App\UserDetail;
class UserController extends Controller
{

    // public function index(){
    //     $user_id = auth()->user()->id;
    //     $user = User::find($user_id);
    //     $userDetail = userDetail::all();
    //          return view('/profile',compact('user',$user));
    
     public function index(){
        $users = Auth::user();
        return view('profile',compact('users',$users));
    }
  
    
    public function profile(){
        $users = Auth::user();
        return view('profile',compact('users', $users));
    }
  
	public function updateAvatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->move('images',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }
    
  

}