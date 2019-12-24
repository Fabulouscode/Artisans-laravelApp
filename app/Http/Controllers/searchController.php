<?php

namespace App\Http\Controllers;
use DB;
use App\UserDetail;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(){
$search = DB::table('user_details')
->select('*')->where('city', 'like'.'$$'.'profession', 'like')
->get();
    $countSearch = count($search);
    return view('home', compact(['search', $search, 'countSearch', $countSearch]));
    }
    
}