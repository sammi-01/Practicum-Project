@extends('frontend.fmaster')
@section('content')
<div class="container">
  <div class="row">
    @foreach($category as $cate)
  <div class="card text-center">
  
  <div class="card-body">
    <h5 class="card-title">{{$cate->name}}</h5>
    <p class="card-text">{{$cate->description}}</p>
    <a href="{{route('companypost.view.list',$cate->id)}}" class="btn btn-primary">View Job Post</a>
  </div>
</div>
@endforeach
  </div>
  
</div>

@endsection