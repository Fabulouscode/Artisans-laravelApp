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
<form method="POST" action="{{action('EducationController@storeEducation')}}">
{{ csrf_field() }}
<div class="card-body">
<p style="text-align:center;">EDIT EDUCATION INFORMATION</p>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Institution</label>
      <input type="text" name="institution" class="form-control" id="inputEmail4" placeholder="University of agriculture makurdi">
    </div>
    <div class="form-group col-md-6">
      <label for="program">Program</label>
     <select name="program" class="form-control">
       <option>select progrm</option>
       <option value="PHD">PH.D</option>
       <option value="MSC">MSC</option>
       <option value="Degree">Degree</option>
       <option value="HND">HND</option>
       <option value="ND">ND</option>
       <option value="NCE">NCE</option>
       <option value="SSCE">SSCE</option>
       <option value="FSLC">FSLC</option>
     </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Field Of Study</label>
      <input type="text" name="fieldOfStudy" class="form-control" id="inputEmail4" placeholder="Bsc Compiuter science">
    </div>
    <div class="form-group col-md-6">
    <label for="state">Start Date</label>
      <input type="date" name="startYear" class="form-control" id="startYear">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">End Year</label>
      <input type="date" name="endYear" class="form-control" id="inputEmail4" placeholder="Makurdi">
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