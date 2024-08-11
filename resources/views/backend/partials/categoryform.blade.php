@extends('master')
@section('content')
<form>
  @csrf
  <div class="form-group">
    <label for="formGroupExampleInput">Category Name</label>
    <input required type="text" name="category_name" class="form-control" id="category" placeholder="Enter a Job category here">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Job Description</label>
    <input required type="text" name="category_description" class="form-control" id="description" placeholder="Give the job description here">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail"> job post</label>
    <input name="category_image" type="file" class="form-control" id="post"  placeholder="Upload your company job post(image)">

  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection