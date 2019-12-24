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
    <div class="container card">
        <form method="POST" action="{{action('SkillController@storeSkill')}}">
            {{ csrf_field() }}
            <div class="card-body">
                <p style="text-align:center;">Add Skills</p>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Skill Name</label>
                    <input type="text" name="skillName" class="form-control" id="inputEmail4" placeholder="dancing">
                </div>


            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <p></p>
        </form>
    </div>
    @endsection