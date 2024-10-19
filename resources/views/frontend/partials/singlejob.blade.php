<!-- single jobpost view section -->
@foreach($alljobpost as $jobpost)
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h2 class="card-title fw-bold">{{$jobpost->title}}</h2>
                    <p class="card-text">{{$jobpost->description}}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" style="max-width: 80px;">
                        <a href="{{route('frontend.jobpost', $jobpost->p_id)}}" class="btn btn-primary">
                            <i class="bi bi-send me-1"></i>
                            Apply Here
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

    <!-- related job section -->
    <section class="py-5 bg-light">
                <div class="container px-4 px-lg-5 mt-5">
                    <h2 class="fw-bolder mb-4">Related Jobpost</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    
                    @foreach ($relatedjobpost as $rp )
                        
                   
                    <div class="col-md-3">
                            <div class="card h-100">
                                
                               
                                <!-- accessories details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- accessories name-->
                                        <h5 class="fw-bolder">{{$rp->title}}</h5>
                                        <!-- Accessories price-->
                                       {{ $rp->description }} 
                                    </div>
                                </div>
                                <!-- accessories actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                                </div>
                            </div>
                        </div>
    
                        @endforeach
    
                    </div>
                    
                </div>
            </section>
            </div>