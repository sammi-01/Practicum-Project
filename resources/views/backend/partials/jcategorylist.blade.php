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
  @foreach($allcategory as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td> 
      <a href="{{route('category.view',$category->id)}}" class="btn btn-success">view</a>
      <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger">Delete</a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{route('Category.form')}}" class="btn btn-primary">go to category form</a>


@endsection  
