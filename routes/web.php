<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/







// Route::group(['middleware' => ['web','auth']], function(){
    Route::get('/', function () {
        return view('auth/login');
    });
// Route::get('/', function(){
//     if(auth()->user()->role == 0){
//         $users['users'] = \App\User::all();
//         return view('home');

//     }else{
//         $users['users'] = \App\User::all();
//         return view('adminhome', $users);
//     }
// });

// });

Auth::routes();
Route::get('registerOrgan', 'RegisterOrganController@index');
Route::post('registerOrgan', 'RegisterOrganController@store');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search', 'SearchController@search');
Route::get('/profile', 'UserController@index');

Route::get('home', 'UserDetailController@index');

Route::post('profile', 'UserController@updateAvatar');
Route::get('pages/editBioData', 'UserDetailController@create');
Route::get('/userDetails/{id}', 'UserDetailController@show');


// Route::get('profile', 'UserDetailController@profile');
Route::post('pages/editBioData', 'UserDetailController@storeUserDetails');
Route::get('profile/', 'UserDetailController@showD');

Route::get('pages/addSkill', 'SkillController@create');
Route::post('pages/addSkill', 'SkillController@store');
Route::get('profile/', 'SkillController@show');
// Route::resource('pages','SkillController');
//contacts
Route::get('pages/contacts', 'ContactController@create');
Route::post('pages/contacts', 'ContactController@storeContacts');
Route::get('profile/', 'ContactController@show');
//Education
Route::get('pages/education', 'EducationController@create');
Route::post('pages/education', 'EducationController@storeEducation');
//Experience
Route::get('pages/addExperience', 'ExperienceController@create');
Route::post('pages/addExperience', 'ExperienceController@storeExperience');

//Events
Route::resource('event', 'EventController');
//organ