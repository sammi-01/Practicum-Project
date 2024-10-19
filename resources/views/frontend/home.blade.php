@extends('frontend.fmaster')
@section('content')
<div class="our-services section-pad-t30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>See the Top Companies {{ count($companies) }}</span>
                    <h2>Browse Top Company </h2>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            @foreach($companies as $company)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="{{ route('companypost.view.list', $company->id) }}">{{ $company->name }}</a></h5>
                            <div class="fs-5 mb-5">
                                <span class="text-decoration-line-through">{{ $company->address }}</span>
                                <div>
                                    <span class="text-decoration-line-through">{{ $company->mobile }}</span>
                                </div>
                                <span class="text-decoration-line-through">{{ $company->email }}</span>
                            </div>
                            <div class="fs-5 mb-5">
                                <span class="text-decoration-line-through"><img src="{{ url('/uploads/' . $company->image) }}" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Other sections remain as they are -->

@endsection
