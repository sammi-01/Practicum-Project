@extends('frontend.fmaster')
@section('content')
<div class="container mt-5">
    <h3 class="mb-4 text-center">Apply For Job!</h3>
    
    <form action="{{route('jobapply.applicant', $applyjobpost->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" name ="full_name" value="{{auth('Jobseekerguard')->user()->name}}" class="form-control" id="fullName" placeholder="Enter your full name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" value="{{auth('Jobseekerguard')->user()->email}}" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="mb-3">
            <label for="resume" class="form-label">Cover Letter (PDF only)</label>
            <input class="form-control" name="cover_letter" type="file" id="cover_letter" accept=".pdf" required>
        </div>
        <div class="form-group">
 
        <div class="mb-3">
            <label for="resume" class="form-label">Resume (PDF only)</label>
            <input class="form-control" name="resume" type="file" id="resume" accept=".pdf" required>
        </div>
        <div class="form-group">
 

        <input type="hidden" name="jobpost_id" value="{{$applyjobpost->id}}">

    </div>

         <button type="submit" class="btn btn-primary w-100">Apply</button> 

      </form>
</div>
@endsection
