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
<form method="POST" action="{{action('ContactController@storeContacts')}}">
{{ csrf_field() }}
<div class="card-body">
<p style="text-align:center;">EDIT CONTACT INFORMATION</p>
</div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="text" name="phone" class="form-control" id="inputEmail4" placeholder="07086428550">
    </div>
    <div class="form-group col-md-6">
      <label for="country">Country</label>
     <select name="country" class="form-control">
       <option>select gender</option>
       <option value="Nigeria">Nigeria</option>
       <option value="Ghana">Ghana</option>
       <option value="South Africa">South Africa</option>
     </select>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="fabian@gmail.com">
    </div>
    <div class="form-group col-md-6">
    <label for="state">State</label>
      <input type="text" name="state" class="form-control" id="inputEmail4" placeholder="Benue">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">City/Town</label>
      <input type="text" name="city" class="form-control" id="inputEmail4" placeholder="Makurdi">
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail4">Facebook Link (Optional)</label>
      <input type="text" name="facebook" class="form-control" id="inputEmail4" placeholder="www.facebook.com/ulaghfabian">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="twitter">@Tiwtter (Optional)</label>
      <input type="text" name="twitter" class="form-control" id="inputEmail4" placeholder="@fabianulagh">
    </div>
    <div class="form-group col-md-6">
    <label for="inputEmail4">Instagram link (Optional)</label>
      <input type="text" name="instagram" class="form-control" id="inputEmail4" placeholder="fabian">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Youtube link (Optional)</label>
      <input type="text" class="form-control" name="youtube" id="inputCity">
    </div>
    
    <div class="form-group col-md-6">
    <label for="inputEmail4">Address</label>
      <input type="text" name="address" class="form-control" id="inputEmail4" placeholder="john aji street no2, ankpa quaters">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <p></p>
</form>
        </div>
@endsection