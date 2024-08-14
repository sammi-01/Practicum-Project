@extends('master')
@section('content')
<form action="{{route('jobpost.store')}}" method="post">
 @csrf 
<div class="form-group">
    <label for="exampleInputEmail1">job title</label>
    <input required name="title" type="text" class="form-control" id="jobid"  placeholder="Enter job title here">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Description</label>
    <input required name="description" type="text" class="form-control" id="jobdescription"  placeholder="Job Description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection