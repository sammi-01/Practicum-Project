@extends('frontend.fmaster')
@section('content')


@foreach($viewdetails as $details)
<div class="container mt-5">
    <div class="card job-card">
        <div class="job-header text-center">
            <h2>Company Information</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 text-center">
                <img src="{{'/uploads/'.$details->image}}" alt="" class="company-logo"> 
                </div>
                <div class="col-md-9">
                    <h5 class="card-title">{{$details->name}}</h5>
                    <p class="card-text">{{$details->address}}</p>
                    <p class="card-text">{{$details->mobile}}</p>
                    <p class="card-text">{{$details->email}}</p>
                    <p class="card-text"></p>
                    
                    
                </div>
            </div>
            <!-- <a href="{{route('viewcompany.details',$details->id)}}"></a>  -->
            <div class="text-center mt-4">
                <a href="{{route('jobapply.applyform',$details->id)}}" class="btn job-apply-btn">Apply Now</a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection