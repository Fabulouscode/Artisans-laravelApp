<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use DB;
use Auth;
use App\Education;
class EducationController extends Controller
{
    public function index(){
        $user = Auth::user();
        // $posts = Post::all();
        return view('pages/education',compact('user',$user));
    }
    public function create(){
        $user = Auth::user();
        return view('pages/education',compact('user',$user));
    }

    public function storeEducation(Request $request){
        //`userId`, `email`, `phone`, `country`, `state`, 
        //`city`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, 
        $this->validate($request, [
            'institution' => 'required',
            'program' => 'required',
            'fieldOfStudy' => 'required',
            'startYear' => 'required',
            'endYear' => 'required',
           
        ]);

        $user = Auth::user();
        $useEducation = new Education();
        $useEducation->userId = $user->id;
        $useEducation->institution = request('institution');
        $useEducation->program = request('program');
        $useEducation->fieldOfStudy = request('fieldOfStudy');
        $useEducation->startYear = request('startYear');
        $useEducation->endYear = request('endYear');
        $useEducation->description = request('description');
        
        $useEducation->save();
        return redirect('/profile')
        ->with('success', 'Your Education added.');
        //return back()->with('success', 'Category added.');
    }
}
