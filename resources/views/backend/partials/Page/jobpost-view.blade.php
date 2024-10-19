@extends('master')


@section('content')

<form action="{{route('jobpost.view',$jobpost->id)}}" method="post" enctype="multipart/form-data">

<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    
                    <div class="col-md-6">
                      
                        <h1 class="display-5 fw-bolder">{{$jobpost->title}}</h1>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 30px">Description: </b> {{$jobpost->description}}</span>
                           
                        </div>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Working Hour: </b>{{$jobpost->working_hour}}</span>
                           
                        </div>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Salary: </b>{{$jobpost->salary}}</span>
                           
                        </div>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Experience: </b>{{$jobpost->experience}}</span>
                           
                        </div>
                        <div class="fs-5 mb-5">
                            <span class=""><b style="font-size : 20px">Post Cost: </b>{{$jobpost->postcost}}</span>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
</form>



@endsection