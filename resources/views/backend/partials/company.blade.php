@extends('master')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Address</th>
      <th scope="col">mobile</th>
      <th scope="col">company post</th>
      <th scope="col">category name</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($allcompany as $company)
    <tr>
      <th scope="row">{{$company->id}}</th>

      <td>{{$company->name}}</td>
      <td>{{$company->address}}</td>
      <td>{{$company->mobile}}</td>
      <td>{{$company->category->name}}</td>
      <td><img src="{{url('/uploads/'.$company->image)}}" alt="" width="50px"></td>
      <td> <a href="#" class="btn btn-success">view</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
<div><a href="{{route('company.form')}}" class="btn btn-primary">go to company form</a></div>
{{$allcompany->links()}}
@endsection