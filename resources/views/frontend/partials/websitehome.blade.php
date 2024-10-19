@extends('frontend.fmaster')

@section('content')
<div class="container-fluid p-0">
  <!-- Hero Section -->
  <div class="jumbotron jumbotron-fluid text-white text-center" style="background-image: url({{asset('frontend/images/website.png') }}); background-size: cover; height: 600px; position: relative;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.1);"></div>
    <div class="container" style="position: relative; z-index: 1;">
      <h1 style="color:#FF4081" class="display-4 font-weight-bold">Welcome to Your Job Portal</h1>
      <p style="color:white" class="lead">Find your dream job or post your company’s openings easily.</p>
      <p style="color:white" class="lead">Get Started!</p>
    </div>
  </div>
</div>



  <!-- Features Section -->
  <div class="container text-center my-5">
    <h2 class="text-primary">Why Choose Us?</h2>
    <p class="text-muted mb-4">Our platform offers a wide range of benefits for both job seekers and employers.</p>
    <div class="row">
      <!-- Feature 1 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
          <img class="card-img-top" src="{{url('frontend/images/job1.png')}}" alt="Feature Image">
          <div class="card-body">
            <h5 class="card-title">For Job Seekers</h5>
            <p class="card-text">Explore thousands of job listings and find your perfect career opportunity.</p>
          </div>
        </div>
      </div>
      <!-- Feature 2 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
          <img class="card-img-top" src="{{url('frontend/images/job4.png')}}" alt="Feature Image">
          <div class="card-body">
            <h5 class="card-title">For Employers</h5>
            <p class="card-text">Easily post job openings, manage applications, and connect with top talent.</p>
          </div>
        </div>
      </div>
      <!-- Feature 3 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
          <img class="card-img-top" src="{{url('frontend/images/job3.png')}}" alt="Feature Image">
          <div class="card-body">
            <h5 class="card-title">User-Friendly Interface</h5>
            <p class="card-text">Enjoy a clean, intuitive interface designed to make your job search or recruitment process smooth.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action Section -->
  <div class="jumbotron jumbotron-fluid text-center text-white" style="background: #FF4081;">
    <div class="container">
      <h2 class="display-5">Ready to Take the Next Step?</h2>
      <p class="lead">Join thousands of others and start exploring opportunities today.</p>
      
    </div>
  </div>
</div>
@endsection
