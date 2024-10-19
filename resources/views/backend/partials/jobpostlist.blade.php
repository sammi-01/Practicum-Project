@extends('master')
@section('content')
<style>
    th { text-align: center; }
</style>
<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Job Title</th>
            <th scope="col">Description</th>
            <th scope="col">Working(Hour)</th>
            <th scope="col">Salary</th>
            <th scope="col">Experience(years)</th>
            <th scope="col">Company</th> 
            <th scope="col">Payment</th> 
            
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alljobpost as $jobpost)
        <tr>
            <th scope="row">{{ $jobpost->id }}</th>
            <td>{{ $jobpost->title }}</td>
            <td>{{ $jobpost->description }}</td>
            <td>{{ $jobpost->working_hour }}</td>
            <td>{{ $jobpost->salary }}</td>
            <td>{{ $jobpost->experience }}</td>
            <td>{{$jobpost->user->name}}</td>
            <td>{{$jobpost->payment_method}}</td>
            
             
                <td>
                <a href="{{route('jobpost.view',$jobpost->id)}}" class="btn btn-success">View</a>
                <a href="{{route('jobpost.delete',$jobpost->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>
    <a href="{{ route('jobpost.form') }}" class="btn btn-primary">Add New</a>
</div>

@endsection
