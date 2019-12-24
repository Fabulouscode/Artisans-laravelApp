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
<form method="POST" action="{{action('ExperienceController@storeExperience')}}">
{{ csrf_field() }}
<div class="card-body">
<p style="text-align:center;">WORK EXPERIENCE INFORMATION</p>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Company</label>
      <input type="text" name="company" class="form-control" id="inputEmail4" placeholder="valuebeam Nig Ltd">
    </div>
    <div class="form-group col-md-6">
      <label for="program">Title</label>
      <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Senior Developer">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">From</label>
      <input type="date" name="from" class="form-control" id="field">
    </div>
    <div class="form-group col-md-6">
    <label for="state">To</label>
      <input type="date" name="to" class="form-control" id="to">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    
       <input type="radio" value="currently" name="currently" class="form-control" id="currently"> Currently
      
    </div>
    <div class="form-group col-md-6">
    <label for="state">Location</label>
      <input type="text" name="location" class="form-control" id="location">
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail4">Description</label>
      <textarea name="description" class="form-control" id="inputEmail4" placeholder=""></textarea>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <p></p>
  </div>
</form>
        </div>
@endsection