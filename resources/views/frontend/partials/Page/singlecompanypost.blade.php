@extends('frontend.fmaster')
@section('content')


@if($companypost)
    <div class="card mb-4" style="width: 18rem;">
        <a href="{{ route('companypost.view.list', $companypost->id) }}">
            <img src="{{ $companypost->image_url }}" class="card-img-top" alt="Job Image">
            <div class="card-body">
                <h5 class="card-title">{{ $companypost->title }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $companypost->description }}</p>
                <p class="card-text"><strong>Working Hours:</strong> {{ $companypost->working_hour }}</p>
                <p class="card-text"><strong>Salary:</strong> {{ $companypost->salary }}</p>
                <p class="card-text"><strong>Experience Required:</strong> {{ $companypost->experience }}</p>
                <a href="{{ route('viewcompany.details',$companypost->id)}}" class="btn btn-primary">Company Details</a> 
                <!-- <a href="{{ route('jobapply.applicant',$companypost->id)}}" class="btn btn-primary">Apply</a>  -->
            </div>
        </a>
    </div>
@else
    <p>Job post not found.</p>
@endif


@endsection
