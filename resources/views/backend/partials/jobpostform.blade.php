@extends('master')
@section('content')
<form action="{{route('jobpost.store')}}" method="post">
 @csrf 
<div class="form-group">
    <label for="exampleInputEmail1">Job title</label>
    <input  name="title" type="text" class="form-control" id="jobid"  placeholder="Enter job title here">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Description</label>
    <input name="description" type="text" class="form-control" id="jobdescription"  placeholder="Job Description">
  </div>
<div class="form-group">
    <label for="workingHour">Working Hour</label>
    <input  name="working_hour" type="number" class="form-control" id="workingHour" placeholder="Enter working hours" min="0">
</div>
<div class="form-group">
    <label for="salary">Salary</label>
    <input name="salary" type="number" class="form-control" id="salary" placeholder="Enter salary" min="0">
</div>
<div class="form-group">
    <label for="experience">Experience</label>
    <input  name="experience" type="number" class="form-control" id="experience" placeholder="Enter experience in years" min="0">
</div>
<div class="form-group">
  <label for="company"> Company </label>
  
        <select name='company_id'class="form-select" aria-label="Default select example">
            <option selected>See the companies</option>
            @foreach($allcompany as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
      </select>
    
</div>
 <div class="form-group">
  <label for="category">Category </label>
  <select name='category_id'class="form-select" aria-label="Default select example">
            <option selected>See the categories</option>
            
            @foreach($allcategory as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
            
      </select>
    </div>
  <div class="form-group">
    <label for="postdate">First date</label>
    <input name="fromdate" type="date" class="form-control" id="todate" placeholder="Entering first date" min="0">

  </div>
  <div class="form-group">
    <label for="postdate">Last Date</label>
    <input name="todate" type="date" class="form-control" id="todate" placeholder="Entering last date" min="0">

  </div>
  <h4 class="mb-3">Payment</h4>

<div class="d-block my-3">
<div class="custom-control custom-radio">
    <input id="paypal" name="payment_method" value="online" type="radio" class="custom-control-input" required>
    <label class="custom-control-label" for="paypal">Online Payment</label>
  </div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
  

</form>
@endsection 