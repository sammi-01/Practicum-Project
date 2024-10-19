@extends('master')


@section('content')

<form action="{{route('category.view', $category->id)}}" method="post" enctype="multipart/form-data">

<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    
                    <div class="col-md-6">
                    
                        <h1 class="display-5 fw-bolder">{{ $category->name}}</h1>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Category Description: </b> {{ $category->description}}</span>
                           
                        </div>
                        
                        

                        
                    </div>
                </div>
            </div>
        </section>
</form>



@endsection