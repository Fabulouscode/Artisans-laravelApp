<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use DB;
use Auth;
use App\Contact;
class ContactController extends Controller
{
    public function index(){
        $user = Auth::user();
        // $posts = Post::all();
        return view('pages/contacts',compact('user',$user));
    }
    public function create(){
        $user = Auth::user();
        return view('pages/contacts',compact('user',$user));
    }

     public function show()
    {
    $user = Auth::user();
    $id = $user->id;

      $contacts = DB::table('users')
        ->join('contacts', 'users.id', '=', 'contacts.userId')
        ->where('users.id', '=', $id)
        ->get();
        $countContacts = count($contacts);
        return view('profile',compact(['contacts',$contacts, 'countContacts',$countContacts]));
    }
    public function storeContacts(Request $request){
        //`userId`, `email`, `phone`, `country`, `state`, 
        //`city`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, 
        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'required',
            'address' => 'required',
           
        ]);

        $user = Auth::user();
        $userContact = new Contact();
        $userContact->userId = $user->id;
        $userContact->email = request('email');
        $userContact->phone = request('phone');
        $userContact->country = request('country');
        $userContact->state = request('state');
        $userContact->address = request('address');
        $userContact->facebook = request('facebook');
        $userContact->twitter = request('twitter');
        $userContact->instagram = request('instagram');
        $userContact->youtube = request('youtube');
        $userContact->city = request('city');
        $userContact->save();
        return redirect('/profile')
        ->with('success', 'Your Contacts added.');
        //return back()->with('success', 'Category added.');
    }
}