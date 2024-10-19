@extends('master')


@section('content')

<form action="{{route('company.view', $company->id)}}" method="post" enctype="multipart/form-data">

<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    
                    <div class="col-md-6">
                    <div class="fs-5 mb-5">
                       <b style="font-size : 30px"></b>
                     <img src="{{url('/uploads/'.$company->image)}}" alt="Company Logo" style="max-width: 100px; max-height: 100px;">
                   
                    </div>
                        <h1 class="display-5 fw-bolder">{{ $company->name}}</h1>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Company Mail: </b> {{ $company->email}}</span>
                           
                        </div>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Address: </b>{{ $company->address}}</span>
                           
                        </div>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Mobile Number: </b>{{ $company->mobile}}</span>
                           
                        </div>
                        

                        
                    </div>
                </div>
            </div>
        </section>
</form>



@endsection