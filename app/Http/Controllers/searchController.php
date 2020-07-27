<?php

namespace App\Http\Controllers;
use DB;
use App\UserDetail;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(){
$userDetails = DB::table('user_details')
->select('*')->where('city', 'like'.'$$'.'profession', 'like')
->get();
    $countSearch = count($userDetails);
    return view('home', compact(['userDetails', $userDetails, 'countSearch', $countSearch]));
    }
    
}