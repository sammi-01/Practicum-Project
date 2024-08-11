@extends('master')
@section('content')

<form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
 @csrf 
<div class="form-group">
    <label for="exampleInputEmail1">Company Name </label>
    <input name="company_name" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter your Name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> company Address</label>
    <input name="company_address" type="text" class="form-control" id="company_address"  placeholder="Enter your address">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail"> Mobile number</label>
    <input name="mobile_number" type="text" class="form-control" id="mobile_numbers"  placeholder="Enter your mobile number">

  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1"> Category Name</label>
    <input name="category_name" type="text" class="form-control" id="category"  placeholder="Category">
    </div>


  <div class="form-group">
    <label for="exampleInputEmail"> Company post</label>
    <input name="company_image" type="file" class="form-control" id="post"  placeholder="Upload your company job post(image)">

  </div>

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection