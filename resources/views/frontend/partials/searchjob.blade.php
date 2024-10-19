@extends('frontend.fmaster')

@section('content')

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <p>
        {{ $category->count() }} items found for "{{ request()->search_key }}"
      </p>

      @foreach ($category as $prod)
   
      <div class="col-md-4 col-lg-4 mb-4">
        <div class="card text-black h-100">
        
          <a href="" style="text-decoration: none; color: inherit;">
            <!-- <img src="{{('/uploads/'.$prod->image)}}" class="card-img-top" alt="Company Image" style="width: 100%; height: 200px; object-fit: cover;" /> -->
            <div class="card-body">
              <div class="text-center mt-1">
                <h4 class="card-title">{{$prod->name}}</h4>
              </div>

              <div class="text-center">
                <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                  <h5 class="mb-0">Here we are with your best choices</h5>
                </div>

                <div class="d-flex flex-column mb-4 lead">
                  <span class="mb-2">{{$prod->description}}</span>
                  <span style="color: transparent;">0</span>
                </div>
              </div>

              <div class="d-flex flex-row">
                <a href="{{route('companypost.view.list',$prod->id)}}" class="btn btn-primary flex-fill me-1">
                  View Job Post
                </a>
              </div>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
