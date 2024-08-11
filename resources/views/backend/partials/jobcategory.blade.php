@extends('master')
@section('content')
<!-- 
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Address</th>
      <th scope="col">mobile</th>
      <th scope="col">company post</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allcategory as $jobcategory)
    <tr>
      <th scope="row">{{$category->id}}</th>

      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td><img src="{{url('/uploads/'.$category->image)}}" alt="" width="50px"></td>
      <td> <a href="#" class="btn btn-success">view</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
<div><a href="{{route('company.form')}}" class="btn btn-primary">go to category form</a></div>
{{$allcategory->links()}} -->

@endsection 
