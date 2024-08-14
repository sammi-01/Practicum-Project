@extends('master')
@section('content')
 
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Description</th>
      <th scope="col">Action</th>
    
      
    </tr>
  </thead>
  <tbody>
  @foreach($allcategory as $jobcategory)
    <tr>
      <th scope="row">{{$jobcategory->id}}</th>

      <td>{{$jobcategory->name}}</td>
      <td>{{$jobcategory->description}}</td>
      <td> <a href="#" class="btn btn-success">view</a></td>

    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('Category.form')}}" class="btn btn-primary">go to category form</a>
{{$allcategory->links()}} 

@endsection  
