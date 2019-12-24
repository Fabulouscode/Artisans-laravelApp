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
    height: 100px;" src="" />
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

                    @foreach($userd AS $use)
                    <li> {{$use->hobbies}}</li>

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

                        @foreach($skills AS $skill)
                        <li> {{$skill->skillName}}</li>

                        @endforeach

                    </ul>
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">

            <div class="card-body">

                @if($countContacts < 0) <h5 class="card-title">Add Contacts <a style="float:right;"
                        href="pages/contacts" class="btn btn-success">ADD</a></h5>
                    @else
                    <h5 class="card-title">Edits Contacts <a style="float:right;" href="pages/editContacts"
                            class="btn btn-success">EDIT</a></h5>
                    @endif
                    <p class="card-text">
                        <ul>
                            @foreach($contacts AS $contact)
                            <li>Email: {{$contact->email}}</li>
                            <li>Phone: {{$contact->phone}}</li>
                            <li>Country: {{$contact->country}}</li>
                            <li>State: {{$contact->state}}</li>
                            <li>City: {{$contact->city}}</li>
                            <li>Facebook: {{$contact->facebook}}</li>
                            <li>Twitter: {{$contact->twitter}}</li>
                            <li>Instagram: {{$contact->instagram}}</li>
                            <li>Youtube: {{$contact->youtube}}</li>
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