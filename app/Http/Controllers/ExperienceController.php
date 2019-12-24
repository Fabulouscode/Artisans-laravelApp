<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use DB;
use Auth;
use App\Experience;
class ExperienceController extends Controller
{
    public function index(){
        $user = Auth::user();
        // $posts = Post::all();
        return view('pages/addExperience',compact('user',$user));
    }
    public function create(){
        $user = Auth::user();
        return view('pages/addExperience',compact('user',$user));
    }

    public function storeExperience(Request $request){
        //`company`, `title`, `from`, `to`, `currently`, `location`, `description`
        $this->validate($request, [
            'company' => 'required',
            'title' => 'required',
            'from' => 'required',
            'to' => 'required',
            'location' => 'required',
           
        ]);

        $user = Auth::user();
        $userExperience = new Experience();
        $userExperience->userId = $user->id;
        $userExperience->company = request('company');
        $userExperience->title = request('title');
        $userExperience->from = request('from');
        $userExperience->to = request('to');
        $userExperience->currently = request('currently');
        $userExperience->location = request('location');
        $userExperience->description = request('description');
        $userExperience->save();
        return redirect('/profile')
        ->with('success', 'Your Experience added.');
        //return back()->with('success', 'Category added.');
    }
}
