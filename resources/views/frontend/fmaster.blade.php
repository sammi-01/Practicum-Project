<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job board HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href=" https://themewagon.github.io/jobfinderportal/assets/css/flaticon.css ">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/price_rangs.css  ">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/slicknav.css   ">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/animate.min.css  ">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/magnific-popup.css   ">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/themify-icons.css">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/slick.css">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/nice-select.css">
            <link rel="stylesheet" href="https://themewagon.github.io/jobfinderportal/assets/css/style.css">
            @notifyCss
            @include('notify::components.notify')
   </head>
      
   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
    

    @include('frontend.partials.header')

    <!-- Preloader Start -->
   
    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most exciting startup jobs</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="Job Tittle or keyword">
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
                                        <a href="#">Find job</a>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Browse Top Categories </h2>
                        </div>
                    </div>
                </div>
                
                <div class="row d-flex justify-contnet-center">
                @foreach($categories as $category)
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">{{$category->name}}</a>
                               <!-- <a href="job_listing.html">{{$category->description}}</a> -->
                            </h5>

                                <span>(15)</span>
                            </div>
                        </div>
                    
                       </div>
                    @endforeach
                    </div>
                    
                <!-- More Btn -->
                <!-- Section Button -->
                
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="assets/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED TOURS Packages</p>
                            <p class="pera2"> Make a Difference with Your Online Resume!</p>
                            <a href="#" class="border-btn2 border-btn4">Upload your cv</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                                <span>7 hours ago</span>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list2.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                                <span>7 hours ago</span>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                                <span>7 hours ago</span>
                            </div>
                        </div>
                         <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="assets/img/icon/job-list4.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>Digital Marketer</h4></a>
                                    <ul>
                                        <li>Creative Agency</li>
                                        <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                        <li>$3500 - $4000</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.html">Full Time</a>
                                <span>7 hours ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                
        <!-- How  Apply Process End-->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container">
                <!-- Testimonial contents -->
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">
                        <div class="h1-testimonial-active dot-style">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <!-- founder -->
                                    <div class="testimonial-founder  ">
                                        <div class="founder-img mb-30">
                                            <img src="assets/img/testmonial/testimonial-founder.png" alt="">
                                            <span>Margaret Lawson</span>
                                            <p>Creative Director</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-top-cap">
                                        <p>“I am at an age where I just want to be fit and healthy our bodies are our responsibility! So start caring for your body and it will care for you. Eat clean it will care for you and workout hard.”</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
          
        <!-- Support Company End-->
        <!-- Blog Area Start -->
        
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/blog/home-blog1.jpg" alt="">
                                    <!-- Blog date -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->

    </main>
  
    @include('frontend.partials.footer')
  
    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src=" https://themewagon.github.io/jobfinderportal/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="https://themewagon.github.io/jobfinderportal/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src=" https://themewagon.github.io/jobfinderportal/assets/js/popper.min.js"></script>
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/bootstrap.min.js "></script>
	    <!-- Jquery Mobile Menu -->
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.slicknav.min.js "></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/owl.carousel.min.js"></script>
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/slick.min.js "></script>
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/price_rangs.js "></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/wow.min.js  "></script>
		<script src=" https://themewagon.github.io/jobfinderportal/assets/js/animated.headline.js "></script>
        <script src=" https://themewagon.github.io/jobfinderportal/assets/js/jquery.magnific-popup.js "></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src=" https://themewagon.github.io/jobfinderportal/assets/js/jquery.scrollUp.min.js"></script>
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.nice-select.min.js "></script>
		<script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.sticky.js "></script>
        
        <!-- contact js -->
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/contact.js "></script>
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.form.js "></script>
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.validate.min.js "></script>
        <script src=" https://themewagon.github.io/jobfinderportal/assets/js/mail-script.js "></script>
        <script src="https://themewagon.github.io/jobfinderportal/assets/js/jquery.ajaxchimp.min.js  "></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src=" https://themewagon.github.io/jobfinderportal/assets/js/plugins.js "></script>
        <script src=" https://themewagon.github.io/jobfinderportal/assets/js/main.js "></script>
        @notifyJs

    </body>
</html>
