 <!-- Header Start -->
    <header>
 <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <!-- Search Box -->
<div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="{{('search)}}" class="search-box">
                                    <div class="input-form">
                                        <input type="text" name="search_key" placeholder="Job Tittle or keyword">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Location BD</option>
                                                <option value="">Location PK</option>
                                                <option value="">Location US</option>
                                                <option value="">Location UK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <a href="#">Search Job</a>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>  



                        
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="job_listing.html">Find a Jobs </a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="job_details.html">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                 @guest('Jobseekerguard')
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="#" class="btn head-btn1" data-toggle="modal" data-target="#registerModal">Register</a>
                                    <a href="#" class="btn head-btn2" data-toggle="modal" data-target="#exampleModal">Login</a>
                                </div>@endguest
                                @auth('Jobseekerguard')
  <li>
  <a href="">{{auth('Jobseekerguard')->user()->name}}

  </a>

  </li>
  <li>
    <a href="{{route('seekers.logout')}}">Logout

    </a>
  </li>
  @endauth




                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  
</button>

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
      <form  id="login-form" class="form" action="{{route('seekers.login')}}" method="post">
        @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label class="text-info">Username:</label><br>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-info">Password:</label><br>
                                <input type="password" name="password"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
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
      <form  id="register-form" class="form" action="{{route('seekers.register')}}" method="post">
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
                                <input type="password" name="password"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="text-info">Retype your password:</label><br>
                                <input type="password" name="password_confirmation"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
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
    