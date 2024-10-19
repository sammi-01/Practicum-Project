@extends('master')
@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h3 class="card-title mb-0">Applicant List</h3>
    </div>
    <div class="card-body p-0">
      <table class="table table-striped table-hover mb-0">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Company</th>
            <th scope="col">Job Post</th>
          </tr>
        </thead>
        <tbody>
          @foreach($applicant as $applicant)
            <tr>
              <th scope="row">{{$applicant->id}}</th>
              <td>{{$applicant->full_name}}</td>
              <td>{{$applicant->email}}</td>
              <td>{{$applicant->phone}}</td>
              <td>{{$applicant->user_id}}</td>
              <td>{{$applicant->jobpost}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
