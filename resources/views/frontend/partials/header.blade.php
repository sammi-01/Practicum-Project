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
<h1 class="m-0 text-primary">JobEntry</h1>
</a>
<button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<div class="navbar-nav ms-auto p-4 p-lg-0">
<a href="index.html" class="nav-item nav-link active">Home</a>
<a href="about.html" class="nav-item nav-link">About</a>
<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
<div class="dropdown-menu rounded-0 m-0">
<a href="job-list.html" class="dropdown-item">Job List</a>
<a href="job-detail.html" class="dropdown-item">Job Detail</a>
</div>
</div>
<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
<div class="dropdown-menu rounded-0 m-0">
<a href="category.html" class="dropdown-item">Job Category</a>
<a href="testimonial.html" class="dropdown-item">Testimonial</a>
<a href="404.html" class="dropdown-item">404</a>
</div>
</div>
<a href="contact.html" class="nav-item nav-link">Contact</a>
</div>
<a href="" class="mr-5 btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>

@guest('Jobseekerguard')
<button data-toggle="modal" href="" class="mr-5 btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" data-target="#exampleModal">Login<i class="fa fa-key ms-3"></i></button>
<button data-toggle="modal" href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" data-target="#registerModal"> Register<i class="fa fa-key ms-3"></i></button>
@endguest

@auth('Jobseekerguard')
<span> user name here</span>
<a href="" class="mr-5 btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Logout<i class="fa fa-arrow-up ms-3"></i></a>


@endauth
</div>
</nav>
<!-- Navbar End -->

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
<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
<input type="submit" class="btn btn-info btn-md" value="submit">
</div>

</form>




</div>
<div class="modal-footer">
<div id="register-link" class="text-right">
<a href="#" class="text-info">Register here</a>
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
<label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
<input type="submit" class="btn btn-info btn-md" value="submit">
</div>
<div id="register-link" class="text-right">
<a href="#" class="text-info">Register here</a>
</div>
</form>




</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary">Save changes</button>
</div>
</div>
</div>
</div>