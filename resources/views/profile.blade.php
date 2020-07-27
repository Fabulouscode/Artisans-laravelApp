@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

            <strong>{{ $message }}</strong>

        </div>

        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="card">
        <div class="row justify-content-center">

            <div class="profile-header-container">
                
                <div class="profile-header-img">
                    <img class="rounded-circle" style=" width: 100px;
    height: 100px;" src="/images/{{Auth::User()->avatar}}" />
                    <!-- badge -->
                    <div class="rank-label-container">
                        <span class="label label-default rank-label"></span>
                    </div>
                </div>
            </div>

        </div>
        <p></p>

        <div class="row justify-content-center">
            <form action="/profile" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" class="form-control-file" name="avatar" id="avatarFile"
                        aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image
                        should not be more than 2MB.</small>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
                <p></p>
            </form>
        </div>
    </div>
</div>
<p></p>
<p></p>
<div class="container">
    <div class="card-deck">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">BASIC INFOR <a style="float:right;" href="pages/editBioData"
                        class="btn btn-success">ADD</a></h5>
                <ul>
                    <?php $user = Auth::user();
                        $id = $user->id; 
                        $details = App\UserDetail::where('userId', $id)->get(); ?>
                    @foreach($details as $detail)
                    <li><b>Gender:</b> {{$detail->gender}}</li>
                    <li><b>Hobby:</b> {{$detail->hobbies}}</li>
                    <li><b>City:</b> {{$detail->city}}</li>
                    <li><b>Profession:</b> {{$detail->profession}}</li>
                    @endforeach
                </ul>

                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Add Skills <a style="float:right;" href="pages/addSkill"
                        class="btn btn-success">ADD</a></h5>
                <p class="card-text">
                    <ul>

                        <?php
                         $user = Auth::user();
                         $id = $user->id;
                        
                        $skills = App\Skill::select('*')->where('userId', $id)->get();
                     
                        ?>
                        @foreach($skills as $skill)
                        <li> {{$skill->skillName}}</li>
                        @endforeach

                    </ul>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">

            <div class="card-body">

                <h5 class="card-title">Add Contacts <a style="float:right;" href="pages/contacts"
                        class="btn btn-success">ADD</a></h5>

                <p class="card-text">
                    <ul>
                        @foreach($contacts AS $contact)
                        <li><b>Email:</b> {{$contact->email}}</li>
                        <li><b>Phone:</b> {{$contact->phone}}</li>
                        <li><b>Country:</b> {{$contact->country}}</li>
                        <li><b>State:</b> {{$contact->state}}</li>
                        <li><b>City:</b> {{$contact->city}}</li>
                        <li><b>Facebook:</b> {{$contact->facebook}}</li>
                        <li><b>Twitter:</b> {{$contact->twitter}}</li>
                        <li><b>Instagram:</b> {{$contact->instagram}}</li>
                        <li><b>Youtube:</b> {{$contact->youtube}}</li>
                        @endforeach
                    </ul>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
<p></p>
<p></p>
<div class="container">
    <div class="card-deck">
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Add Education Qualification<a style="float:right;" href="pages/education"
                        class="btn btn-success">ADD</a></h5>
                <ul>
                    <?php
                         $user = Auth::user();
                         $id = $user->id;
                        
                        $education = App\Education::select('*')->where('userId', $id)->get();
                     
                        ?>
                    @foreach($education as $edu)
                    <li> {{$edu->institution}}</li>
                    <li> {{$edu->program}}</li>
                    <li> {{$edu->fieldOfStudy}}</li>
                    <li> {{$edu->startYear}}</li>
                    <li> {{$edu->endYear}}</li>
                    @endforeach
                </ul>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <h5 class="card-title">Add Experience <a style="float:right;" href="pages/addExperience"
                        class="btn btn-success">ADD</a></h5>
                <p class="card-text">
                    <ul>



                    </ul>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

    </div>
</div>
@endsection