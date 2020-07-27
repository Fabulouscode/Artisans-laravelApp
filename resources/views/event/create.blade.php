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
        <form method="POST" action="{{action('EventController@store')}}">
            {{ csrf_field() }}
            <div class="card-body">
                <p style="text-align:center;">FEEL THE FORM BELOW</p>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Title</label>
                    <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="God is Almighty">
                </div>
                <div class="form-group col-md-6">
                    <label for="organ">Organization</label>
                    <input type="text" name="organ" class="form-control" id="inputEmail4" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">City</label>
                    <input type="text" name="city" value="{{$user->city}}" class="form-control" id="inputEmail4"
                        placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="state">Address</label>
                    <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Phone</label>
                    <input type="text" name="phone" class="form-control" id="inputEmail4" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Country</label>
                    <input type="text" name="contry" class="form-control" id="inputEmail4" placeholder="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="startDate">Start Date</label>
                    <input type="date" name="startDate" class="form-control" id="inputEmail4" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">End Date</label>
                    <input type="date" name="endDate" class="form-control" id="inputEmail4" placeholder="fabian">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">

                    <label for="inputEmail4">Description</label>
                    <textarea name="description" class="form-control" id="inputEmail4" placeholder=""></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <p></p>
        </form>
    </div>
    @endsection