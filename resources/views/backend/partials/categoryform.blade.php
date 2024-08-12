@extends('master')
@section('content')
<form action="{{route('Category.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Category Name</label>
    <input required type="text" name="category_name" class="form-control" id="category" placeholder="Enter a Job category here">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Job Description</label>
    <input required type="text" name="category_description" class="form-control" id="description" placeholder="Give the job description here">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection