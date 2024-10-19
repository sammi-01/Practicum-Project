<div class="container-xxl bg-white p-0">
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
      <h1 class="m-0 text-primary">YourJob</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="{{route('frontend.home')}}" class="nav-item nav-link active">Home</a>
        <a href="{{route('about.us')}}" class="nav-item nav-link">About</a>
        
        <div class="nav-item dropdown">
          <a href="{{route('frontend.category')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
          <div class="dropdown-menu rounded-0 m-0">
            <a href="category.html" class="dropdown-item">Job Category</a>
            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
            <a href="404.html" class="dropdown-item">404</a>
          </div>
        </div>
        <a href="{{route('frontend.contact')}}" class="nav-item nav-link">Contact</a>
      </div>

      <!-- Search Form Alignment -->
      <div class="d-flex align-items-center ms-lg-4">
  <form action="{{route('search')}}" class="d-flex align-items-center">
    <input type="text" name="search_key" placeholder="Search" value="{{request()->search_key}}" 
           class="form-control me-2" style="height: 30px; width: 200px; border-radius: 0;">
    <button type="submit" class="btn btn-primary rounded-0 py-2 px-4" style="height: 30px;">Search<i class="fa fa-search ms-2"></i></button>
  </form>
</div>



      <!-- Guest Links -->
      @guest('Jobseekerguard')
      <div class="d-flex align-items-center ms-lg-4">
        <button class="btn btn-primary rounded-0 py-2 px-lg-4 me-2" data-toggle="modal" data-target="#exampleModal">Login<i class="fa fa-key ms-2"></i></button>
        <button class="btn btn-primary rounded-0 py-2 px-lg-4 me-2" data-toggle="modal" data-target="#registerModal">Register<i class="fa fa-key ms-2"></i></button>
      </div>
      @endguest

      <!-- Authenticated User Links -->
      @auth('Jobseekerguard')
      <div class="d-flex align-items-center ms-lg-4">
         <a style="color:black" href="{{route('user.profile')}}"><span style="margin: 10px; padding: 10px " >Welcome, {{ auth('Jobseekerguard')->user()->name }}</span></a>
        <a href="{{ route('seekers.logout') }}" class="btn btn-primary rounded-0 py-2 px-lg-4">
          Logout<i class="fa fa-arrow-up ms-2"></i>
        </a>
      </div>
      @endauth
    </div>
  </nav>
  <!-- Navbar End -->
</div>



<!-- Login Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Login Page</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form id="login-form" class="form" action="{{route('seekers.login')}}" method="post">
@csrf
<h3 class="text-center text-info">Login</h3>
<div class="form-group">
<label class="text-info">Username:</label><br>
<input type="text" name="email" class="form-control">
</div>
<div class="form-group">
<label class="text-info">Password:</label><br>
<input type="password" name="password" class="form-control">
</div>
<div class="form-group">
<input type="submit" class="btn btn-info btn-md" value="submit">
</div>

</form>




</div>
<div class="modal-footer">
<div id="register-link" class="text-right">
</div>
</div>
</div>
</div>
</div><!-- Login Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="login-form" class="form" action="{{ route('seekers.login') }}" method="post">
          @csrf
          <h3 class="text-center text-info">Login</h3>
          <div class="form-group">
            <label class="text-info">Username:</label><br>
            <input type="text" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-info">Password:</label><br>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            
            <input type="submit" class="btn btn-info btn-md" value="submit">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div id="register-link" class="text-right">
         
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Registration Page</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form id="register-form" class="form" action="{{route('seekers.register')}}" method="post">
@csrf
<h3 class="text-center text-info">Register</h3>
<div class="form-group">
<label class="text-info">Enter your Full Name</label><br>
<input name="name" type="text" class="form-control">
</div>



<div class="form-group">
<label class="text-info">Enter your email</label><br>
<input type="text" name="email" class="form-control">
</div>


<div class="form-group">
<label class="text-info">password:</label><br>
<input type="password" name="password" class="form-control">
</div>

<div class="form-group">
<label class="text-info">Retype your password:</label><br>
<input type="password" name="password_confirmation" class="form-control">
</div>

<div class="form-group">

<input type="submit" class="btn btn-info btn-md" value="submit">
</div>
</form>
</div>
</div>
</div>
</div>