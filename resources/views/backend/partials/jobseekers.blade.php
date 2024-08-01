@extends('master')
@section('content')

<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alljobseekers as $seeker)
    <tr>
      <th scope="row">{{$seeker->id}}</th>

      <td>{{$seeker->name}}</td>
      <td>{{$seeker->address}}</td>
      <td>{{$seeker->mobile}}</td>
      <td>{{$seeker->action}}<a href="" class="btn btn-success">view</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
<div><a href="{{route('jobseekers.form')}}" class="btn btn-primary">go to jobseekers form</a></div>
</div>
{{$alljobseekers->links()}}
@endsection