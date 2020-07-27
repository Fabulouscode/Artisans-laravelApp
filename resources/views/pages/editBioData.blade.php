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
        <form method="POST" action="{{action('UserDetailController@storeUserDetails')}}">
            {{ csrf_field() }}
            <div class="card-body">
                <p style="text-align:center;">EDIT BASIC INFORMATION</p>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Phone</label>
                    <input type="text" name="phone" class="form-control" id="inputEmail4" placeholder="07086428550">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Gender</label>
                    <select name="gender" class="form-control">
                        <option>select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Hobbies</label>
                <input type="text" name="hobbies" class="form-control" id="inputAddress" placeholder="coding, music">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Profession</label>
                <input type="text" name="profession" class="form-control" id="inputAddress2"
                    placeholder="Am a web developer">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city" id="inputCity">
                </div>


            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <p></p>
        </form>
    </div>
    @endsection