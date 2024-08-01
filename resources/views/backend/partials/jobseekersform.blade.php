@extends('master')
@section('content')
<form action="{{route('jobseekers.store')}}" method="post">
 @csrf 
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input required name="name" type="text" class="form-control" id="jobseeker"  placeholder="Enter your name here">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input required name="adress" type="text" class="form-control" id="address"  placeholder="Your Address">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Mobile</label>
    <input required name="mobile" type="text" class="form-control" id="number" placeholder="Enter your mobile number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection