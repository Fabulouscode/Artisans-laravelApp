  <?php
//namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Auth;
use App\Skill;
use App\User;
//use DB;
class SkillController extends Controller
{
  
     public function show($id){
        //$skill = Skill::all();
        $skill = DB::table('users')
        ->join('skills', 'users.id', '=', 'skills.userId')
        ->select('*')
        ->get();
        return view('profile',compact('skill',$skill));
    }
    // create method
    public function create(){

        $user = Auth::user();
        return view('pages/addSkill',compact('user',$user));
    }

    //profile method
    public function profile(){
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }

    //store
    public function storeSkill(Request $request){
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
}