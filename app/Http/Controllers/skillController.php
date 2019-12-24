<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Skill;
use App\User;
use DB;
class skillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $skill = Skill::all();
        return view('pages/addSkill',compact('user', $user));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
          $skill = Skill::all();
        return view('pages/addSkill', compact('user', $user));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $this->validate($request, [
           
            'skillName' => 'required'
        ]);

        $user = Auth::user();
        $skill = new Skill();
        $skill->userId = $user->id;
        $skill->skillName = request('skillName');
       
        $skill->save();
 
        return redirect('/profile')
        ->with('success', 'Skill added.');
        //return back()->with('success', 'Category added.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    $user = Auth::user();
    $id = $user->id;

      $skills = DB::table('users')
        ->join('skills', 'users.id', '=', 'skills.userId')
        ->where('users.id', '=', $id)
        ->get();
        return view('profile',compact('skills',$skills));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

      public function profile(){
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }
}