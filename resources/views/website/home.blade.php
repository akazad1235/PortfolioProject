@section('title', 'home|Portfolio')
@extends('website.components.layouts')
@section('content')
   
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" height="15" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span data-feather="menu" class="fea icon-md"></span>
                </button><!--end button-->

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-nav-link mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#homes">Home</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Resume</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#news">Blog</a>
                        </li><!--end nav item-->
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li><!--end nav item-->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages
                            </a>
                            <div class="dropdown-menu rounded m-0" aria-labelledby="navbarDropdown">
                                <div class="container ml-0 ml-md-0">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a class="dropdown-item" href="page-blog.html">Blog</a>
                                            <a class="dropdown-item" href="page-blog-detail.html">Blog Detail</a>
                                            <a class="dropdown-item" href="page-portfolio.html">Portfolio</a>
                                            <a class="dropdown-item" href="page-portfolio-detail.html">Portfolio Detail</a>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end container-->
                            </div>
                        </li><!--end nav item-->
                    </ul>

                    <ul class="list-unstyled mb-0 mt-2 mt-sm-0 social-icon">
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                    </ul>
                </div> 
            </div><!--end container-->
		</nav><!--end navbar-->
        <!-- Navbar End -->

        <!-- HOME START-->
        <section class="bg-home bg-light d-table w-100" style="background-image:url('{{asset('public/admin/images/home/'.$home->bg_image)}}')" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="title-heading mt-5">
                            <h6 class="sub-title">Looking for a {{$home->designation}} !</h6>
                            <h1 class="heading text-primary mb-3">I'm {{$home->name}}</h1>
                            <p class="para-desc text-muted">{{substr($home->desc, 0, 200)}}</p>
                            <div class="mt-4 pt-2">
                                <a href="javascript:void(0)" class="btn btn-primary rounded mb-2 mr-2">Hire me</a>
                                <a href="javascript:void(0)" class="btn btn-outline-primary rounded mb-2">Download CV <i data-feather="download" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container--> 
            <a href="#about" data-scroll-nav="1" class="mouse-icon rounded-pill bg-transparent mouse-down">
                <span class="wheel position-relative d-block mover"></span>
            </a>
        </section><!--end section-->
        <!-- HOME END-->
        
        <!-- About Start -->
        <section class="section pb-3" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="about-hero">
                            <img src="{{asset('public/admin/images/home/'.$home->image)}}" class="img-fluid mx-auto d-block about-tween position-relative" alt="">
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-7 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title mb-0 ml-lg-5 ml-md-3">
                            <h4 class="title text-primary mb-3">{{$home->name}}</h4>
                            <h6 class="designation mb-3">I'm a Passionate <span class="text-primary">{{$home->designation}}r</span></h6>
                            <p class="text-muted">{{substr($home->desc, 0, 255)}}</p>
                            <img src="" height="22" alt="">
                            <div class="mt-4">
                                <a href="#projects" class="btn btn-primary mouse-down">View Portfolio</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <div class="titles">
                                <h4 class="title title-line text-uppercase mb-4 pb-4">Hobbies & Interests</h4>
                                <span></span>
                            </div>
                            <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                
                <div class="row">
                @foreach($experience as $row)
                                
                                
                    <div class="col-lg-3 col-md-4 col-12 mt-4 pt-2">
                        <div class="interests-desc bg-light position-relative px-2 py-3 rounded">
                            <div class="hobbies d-flex align-items-center">
                                <div class="text-center rounded-pill mr-4">
                                    <i data-feather="monitor" class="icon fea icon-md-sm"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title mb-0">{{$row->tag}}</h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                   @endforeach
                           
                   
                </div>
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="rounded py-md-5 py-4" style="background: url('images/bg-counter.jpg') center center;">
                    <div class="container">
                        <div class="row" id="counter">
                            <div class="col-lg-3 col-6">
                                <div class="counter-box rounded py-3 text-center">
                                    <div class="counter-icon">
                                        <i data-feather="smile" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h3 class="counter-value mt-3 text-white" data-count="1251">95</h3>
                                    <h6 class="counter-head font-weight-normal mb-0 text-white">Happy Client</h6>
                                </div><!--end counter box-->
                            </div><!--end col-->
    
                            <div class="col-lg-3 col-6">
                                <div class="counter-box rounded py-3 text-center">
                                    <div class="counter-icon">
                                        <i data-feather="award" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h3 class="counter-value mt-3 text-white" data-count="15">1</h3>
                                    <h6 class="counter-head font-weight-normal mb-0 text-white">Award Won</h6>
                                </div><!--end counter box-->
                            </div><!--end col-->
    
                            <div class="col-lg-3 col-6">
                                <div class="counter-box rounded py-3 text-center">
                                    <div class="counter-icon">
                                        <i data-feather="coffee" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h3 class="counter-value mt-3 text-white" data-count="3261">30</h3>
                                    <h6 class="counter-head font-weight-normal mb-0 text-white">Cup of Coffee</h6>
                                </div><!--end counter box-->
                            </div><!--end col-->
    
                            <div class="col-lg-3 col-6">
                                <div class="counter-box rounded py-3 text-center">
                                    <div class="counter-icon">
                                        <i data-feather="thumbs-up" class="fea icon-md text-primary"></i>
                                    </div>
                                    <h3 class="counter-value mt-3 text-white" data-count="36">3</h3>
                                    <h6 class="counter-head font-weight-normal mb-0 text-white">Project Complete</h6>
                                </div><!--end counter box-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end div-->
            </div><!--end container fluid-->
        </section>
        <!-- About end -->
            
        <!-- Services Start -->
        <section class="section bg-light" id="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <div class="titles">
                                <h4 class="title title-line text-uppercase mb-4 pb-4">Services ?</h4>
                                <span></span>
                            </div>
                            <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">   
                @foreach($service as $row)                 
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="service-wrapper rounded position-relative text-center border border-footer p-4 pt-5 pb-5">
                            <div class="icon text-primary">
                                <i data-feather="airplay" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title">{{$row->title}}</h5>
                                <p class="text-muted mt-3 mb-0">{{substr($row->sotrt_desc, 0, 100)}}</p>
                            </div>
                            <div class="big-icon">
                                <i data-feather="airplay" class="fea icons"></i>
                            </div>
                        </div>
                    </div><!--end col-->
                    @endforeach

                  
                    
                 
                   
                </div><!--end row-->
            </div><!--end container-->
        </section>
        <!-- Services End -->

        <!-- Skill & CTA START -->
        <section class="cta-full border-top">
            <div class="container-fluid">
                <div class="row position-relative">
                    <div class="col-lg-4 padding-less img" style="background-image:url('{{asset('public/website/images/skills.jpg')}}')" data-jarallax='{"speed": 0.5}'></div><!-- end col -->
                    <div class="col-lg-8 offset-lg-4">
                        <div class="cta-full-img-box">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <div class="section-title">
                                        <div class="titles">
                                            <h4 class="title title-line text-uppercase mb-4 pb-4">Work Expertise</h4>
                                            <span></span>
                                        </div>
                                        <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row align-items-center">
                                
                                <div class="col-lg-3 col-md-4 col-12">
                                    <ul class="nav nav-pills flex-column" id="pills-tab" role="tablist">
                                        <li class="nav-item mt-4 pt-2">
                                            <a class="nav-link rounded active" id="pills-cloud-tab" data-toggle="pill" href="#pills-cloud" role="tab" aria-controls="pills-cloud" aria-selected="false">
                                                <div class="skill-container text-center pt-1 pb-1">
                                                    <h6 class="title mb-0">Web Design</h6>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-4 pt-2">
                                            <a class="nav-link rounded" id="pills-smart-tab" data-toggle="pill" href="#pills-smart" role="tab" aria-controls="pills-smart" aria-selected="false">
                                                <div class="skill-container text-center pt-1 pb-1">
                                                    <h6 class="title mb-0">Web Development</h6>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                        
                                        <li class="nav-item mt-4 pt-2">
                                            <a class="nav-link rounded" id="pills-apps-tab" data-toggle="pill" href="#pills-apps" role="tab" aria-controls="pills-apps" aria-selected="false">
                                                <div class="skill-container text-center pt-1 pb-1">
                                                    <h6 class="title mb-0">Language</h6>
                                                </div>
                                            </a><!--end nav link-->
                                        </li><!--end nav item-->
                                    </ul><!--end nav pills-->
                                </div><!--end col-->
                                

                                <div class="col-lg-9 col-md-8 col-12">
                                    <div class="tab-content pl-lg-4" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-cloud" role="tabpanel" aria-labelledby="pills-cloud-tab">
                                            @foreach($skill as $row)
                                            @if( 1 == $row->header_id )
                                            <div class="progress-box mt-4 pt-2">
                                                <h6 class="font-weight-normal">
                                                    
                                                        {{$row->title}}
                                                </h6>

                                                <div class="progress">
                                                    <div class="progress-bar position-relative bg-primary" style="width:{{$row->value}}%;">
                                                        <div class="progress-value d-block text-dark h6">{{$row->value}}%</div>
                                                    </div>
                                                </div>
                                                

                                            </div><!--end process box-->

                                            @endif
                                            @endforeach
                                           
                                        </div><!--end teb pane-->
                                        
                                        <div class="tab-pane fade" id="pills-smart" role="tabpanel" aria-labelledby="pills-smart-tab">
                                        @foreach($skill as $row)
                                        @if(2 == $row->header_id)
                                            <div class="progress-box mt-4 pt-2">
                                                <h6 class="font-weight-normal"> {{$row->title}}</h6>
                                                <div class="progress">
                                                    <div class="progress-bar position-relative bg-primary" style="width:{{$row->value}}%;">
                                                        <div class="progress-value d-block text-dark h6">{{$row->value}}%</div>
                                                    </div>
                                                </div>
                                            </div><!--end process box-->
                                            @endif
                                             @endforeach
                                        </div><!--end teb pane-->

                                        <div class="tab-pane fade" id="pills-apps" role="tabpanel" aria-labelledby="pills-apps-tab">
                                        @foreach($skill as $row)
                                          @if(3 == $row->header_id)
                                            <div class="progress-box mt-4 pt-2">
                                                <h6 class="font-weight-normal">{{$row->title}}</h6>
                                                <div class="progress">
                                                    <div class="progress-bar position-relative bg-primary" style="width:{{$row->value}}%;">
                                                        <div class="progress-value d-block text-dark h6">{{$row->value}}%</div>
                                                    </div>
                                                </div>
                                            </div><!--end process box-->
                                             @endif
                                             @endforeach
                                        </div><!--end teb pane-->
                                    </div><!--end tab content-->
                                </div><!--end col-->
                            </div> <!-- end row --> 
                        </div> <!-- end about detail -->
                    </div> <!-- end col -->        
                </div><!--end row-->
            </div><!--end container fluid-->
        </section><!--end section-->   
        <!-- Skill & CTA End -->

        <!-- Projects End -->
        <section class="section bg-light" id="projects">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <div class="titles">
                                <h4 class="title title-line text-uppercase mb-4 pb-4">My Portfolio</h4>
                                <span></span>
                            </div>
                            <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>    
            
            <div class="container">                
                <div class="row mt-4 pt-2">
                    <div class="col-lg-12">
                        <ul class="portfolioFilter text-center mb-0 list-unstyled">
                            
                            <li class="list-inline-item mb-3"><a href="#" data-filter="*" class="active text-dark mr-2 py-2 px-3 rounded">All</a></li>
                            @foreach($projectCat as $row)
                            <li class="list-inline-item mb-3"><a href="#" data-filter=".{{$row->category_name}}" class="text-dark mr-2 py-2 px-3 rounded">{{$row->category_name}}</a></li>
                            @endforeach

                            <!-- <li class="list-inline-item mb-3"><a href="#" data-filter=".natural" class="text-dark mr-2 py-2 px-3 rounded">Natural</a></li>
                            <li class="list-inline-item mb-3"><a href="#" data-filter=".creative" class="text-dark mr-2 py-2 px-3 rounded">Creative</a></li>
                            <li class="list-inline-item mb-3"><a href="#" data-filter=".personal" class="text-dark mr-2 py-2 px-3 rounded">Personal</a></li>
                            <li class="list-inline-item mb-3"><a href="#" data-filter=".photography" class="text-dark mr-2 py-2 px-3 rounded">Photography</a></li> -->
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="portfolioContainer row">
                @foreach($portfolio as $row)
                    <div class="col-lg-4 col-md-6 mt-4 pt-2 {{$row->projectcategory->category_name}} personal">
                        <div class="portfolio-box rounded position-relative overflow-hidden">
                            <div class="portfolio-box-img position-relative overflow-hidden">
                                <img src="{{asset('public/admin/images/portfolio/'.$row->image)}}" class="img-fluid" alt="member-image">
                                <div class="overlay-work">
                                    <div class="work-content text-center">
                                        <a href="images/portfolio/1.jpg" class="text-light work-icon bg-dark d-inline-block rounded-pill mfp-image"><i data-feather="camera" class="fea icon-sm image-icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="gallary-title py-4 text-center">
                                <h5><a href="page-portfolio-detail.html" class="title text-dark">{{$row->project_name}}</a></h5>
                                <span>{{$row->projectcategory->category_name}}</span>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach

                  
                </div><!-- End row -->

                <div class="row">
                    <div class="col-lg-12 mt-4 pt-2">
                        <div class="text-center">
                            <a href="page-portfolio.html" class="btn btn-outline-primary">More works <i data-feather="refresh-cw" class="fea icon-sm"></i></a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Projects End -->

        <!-- Testimonial Start -->
        <section class="cta-full">
            <div class="container-fluid">
                <div class="row position-relative">
                    <div class="col-lg-8 order-2">
                        <div class="cta-full-img-box">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <div class="section-title">
                                        <div class="titles">
                                            <h4 class="title title-line text-uppercase mb-4 pb-4">Clients say</h4>
                                            <span></span>
                                        </div>
                                        <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-12">
                                    <div id="clients-testi" class="owl-carousel mt-3">
                                        <!--Start Client-->
                                        <div class="client-review border rounded m-3 mb-4 position-relative shadow">
                                            <div class="review-star">
                                                <ul class="list-unstyled float-right mb-0">
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                </ul>

                                                <div class="review-base">
                                                    <h6 class="title">" Design Quality "</h6>
                                                </div>
                                            </div><!--end review star-->

                                            <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, by injected humour, or randomised words which don't look even slightly believable. </p>
                                            <div class="reviewer d-flex align-items-center">
                                                <img src="images/client/01.jpg" class="img-fluid rounded-circle avatar avatar-small mr-3" alt="">
                                                <div class="content">
                                                    <h5 class="name mb-0">Erich Bissonette</h5>
                                                    <small class="designation text-muted">Oppo</small>
                                                </div>
                                            </div><!--end reviewer-->
                                        </div><!--end client review-->
                                        <!--End Client-->

                                        <!--Start Client-->                            
                                        <div class="client-review border rounded m-3 mb-4 position-relative shadow">
                                            <div class="review-star">
                                                <ul class="list-unstyled float-right mb-0">
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star-half"></i></li>
                                                </ul>

                                                <div class="review-base">
                                                    <h6 class="title">" Code Quality "</h6>
                                                </div>
                                            </div><!--end review star-->

                                            <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                                            <div class="reviewer d-flex align-items-center">
                                                <img src="images/client/02.jpg" class="img-fluid rounded-circle avatar avatar-small mr-3" alt="">
                                                <div class="content">
                                                    <h5 class="name mb-0">Tina Meyer</h5>
                                                    <small class="designation text-muted">Vivo</small>
                                                </div>
                                            </div><!--end reviewer-->
                                        </div><!--end client review-->
                                        <!--End Client-->

                                        <!--Start Client-->                            
                                        <div class="client-review border rounded m-3 mb-4 position-relative shadow">
                                            <div class="review-star">
                                                <ul class="list-unstyled float-right mb-0">
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                </ul>

                                                <div class="review-base">
                                                    <h6 class="title">" Feature Availability "</h6>
                                                </div>
                                            </div><!--end review star-->

                                            <p class="text-muted review-para font-italic mt-3 mb-3">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                            <div class="reviewer d-flex align-items-center">
                                                <img src="images/client/03.jpg" class="img-fluid rounded-circle avatar avatar-small mr-3" alt="">
                                                <div class="content">
                                                    <h5 class="name mb-0">Sharon Murdock</h5>
                                                    <small class="designation text-muted">Apple</small>
                                                </div>
                                            </div><!--end reviewer-->
                                        </div><!--end client review-->
                                        <!--End Client-->

                                        <!--Start Client-->
                                        <div class="client-review border rounded m-3 mb-4 position-relative shadow">
                                            <div class="review-star">
                                                <ul class="list-unstyled float-right mb-0">
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                </ul>

                                                <div class="review-base">
                                                    <h6 class="title">" Customizability "</h6>
                                                </div>
                                            </div><!--end review star-->

                                            <p class="text-muted review-para font-italic mt-3 mb-3">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                                            <div class="reviewer d-flex align-items-center">
                                                <img src="images/client/04.jpg" class="img-fluid rounded-circle avatar avatar-small mr-3" alt="">
                                                <div class="content">
                                                    <h5 class="name mb-0">Jesse Hunt</h5>
                                                    <small class="designation text-muted">Samsung</small>
                                                </div>
                                            </div><!--end reviewer-->
                                        </div><!--end client review-->
                                        <!--End Client-->

                                        <!--Start Client-->                            
                                        <div class="client-review border rounded m-3 mb-4 position-relative shadow">
                                            <div class="review-star">
                                                <ul class="list-unstyled float-right mb-0">
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star-half"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star-outline"></i></li>
                                                </ul>

                                                <div class="review-base">
                                                    <h6 class="title">" Flexibility "</h6>
                                                </div>
                                            </div><!--end review star-->

                                            <p class="text-muted review-para font-italic mt-3 mb-3">There are many variations of passages of Lorem Ipsum available, by injected humour, or randomised words which don't look even slightly believable. </p>
                                            <div class="reviewer d-flex align-items-center">
                                                <img src="images/client/05.jpg" class="img-fluid rounded-circle avatar avatar-small mr-3" alt="">
                                                <div class="content">
                                                    <h5 class="name mb-0">Andrea Toy</h5>
                                                    <small class="designation text-muted">Nokia</small>
                                                </div>
                                            </div><!--end reviewer-->
                                        </div><!--end client review-->
                                        <!--End Client-->

                                        <!--Start Client-->                            
                                        <div class="client-review border rounded m-3 mb-4 position-relative shadow">
                                            <div class="review-star">
                                                <ul class="list-unstyled float-right mb-0">
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                    <li class="list-inline-item text-primary"><i class="mdi mdi-star"></i></li>
                                                </ul>

                                                <div class="review-base">
                                                    <h6 class="title">" Development "</h6>
                                                </div>
                                            </div><!--end review star-->

                                            <p class="text-muted review-para font-italic mt-3 mb-3"> It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                                            <div class="reviewer d-flex align-items-center">
                                                <img src="images/client/06.jpg" class="img-fluid rounded-circle avatar avatar-small mr-3" alt="">
                                                <div class="content">
                                                    <h5 class="name mb-0">Jay Allums</h5>
                                                    <small class="designation text-muted">RedMI</small>
                                                </div>
                                            </div><!--end reviewer-->
                                        </div><!--end client review-->
                                        <!--End Client-->
                                    </div><!--end testi review-->  
                                </div><!--end col-->
                            </div><!--end row-->
                        </div> <!-- end about detail -->
                    </div> <!-- end col -->    

                    <div class="col-lg-4 offset-lg-8 padding-less img order-1" style="background-image:url('images/testi.jpg')" data-jarallax='{"speed": 0.5}'></div><!-- end col -->    
                </div><!--end row-->
            </div><!--end container fluid-->
        </section><!--end section-->  
        <!-- Testimonial End -->

        <!-- Blog Start -->
        <section class="section bg-light pb-3" id="news">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <div class="titles">
                                <h4 class="title title-line text-uppercase mb-4 pb-4">Latest News & Blog</h4>
                                <span></span>
                            </div>
                            <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="blog-post rounded shadow">
                            <img src="images/blog/01.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm mr-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm mr-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul>  
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Our Home Entertainment has Evolved Significantly</a></h5> 
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                    <li><i class="mdi mdi-calendar-edit mr-1"></i>10th April, 2020</li>
                                </ul>
                            </div><!--end content-->
                        </div><!--end blog post-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="blog-post rounded shadow">
                            <img src="images/blog/02.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm mr-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm mr-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">These Are The Voyages of The Starship Enterprise</a></h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                    <li><i class="mdi mdi-calendar-edit mr-1"></i>10th April, 2020</li>
                                </ul>
                            </div><!--end content-->
                        </div><!--end blog post-->
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="blog-post rounded shadow">
                            <img src="images/blog/03.jpg" class="img-fluid rounded-top" alt="">
                            <div class="content pt-4 pb-4 p-3">
                                <ul class="list-unstyled d-flex justify-content-between post-meta">
                                            <li><i data-feather="user" class="fea icon-sm mr-1"></i><a href="javascript:void(0)" class="text-dark">Cristino</a></li> 
                                            <li><i data-feather="tag" class="fea icon-sm mr-1"></i><a href="javascript:void(0)" class="text-dark">Branding</a></li>                                    
                                        </ul> 
                                <h5 class="mb-3"><a href="page-blog-detail.html" class="title text-dark">Three Reasons Visibility Matters in Supply Chain</a></h5>
                                <ul class="list-unstyled mb-0 pt-3 border-top d-flex justify-content-between">
                                    <li><a href="javascript:void(0)" class="text-dark">Read More <i data-feather="chevron-right" class="fea icon-sm"></i></a></li>
                                    <li><i class="mdi mdi-calendar-edit mr-1"></i>10th April, 2020</li>
                                </ul>
                            </div><!--end content-->
                        </div><!--end blog post-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="rounded-pill py-5" style="background: url('images/hireme.jpg') center center;">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <h4 class="text-light">I Am Available For Freelancer Projects.</h4>
                                <p class="text-white-50 mx-auto mt-4 para-desc">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                                <div class="mt-4">
                                    <a href="#contact" class="btn btn-primary mouse-down">Hire me <i data-feather="chevron-down" class="fea icon-sm"></i></a>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div><!--end div-->
            </div><!--end container fluid-->
        </section><!--end section-->
        <!-- Blog Start -->

        <!-- Contact Start -->
        <section class="section pb-0" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <div class="titles">
                                <h4 class="title title-line text-uppercase mb-4 pb-4">Contact Me</h4>
                                <span></span>
                            </div>
                            <p class="text-muted mx-auto para-desc mb-0">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="phone" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Phone</h5>
                                <p class="text-muted">Promising development turmoil inclusive education transformative community</p>
                                <a href="tel:+152534-468-854" class="text-primary">+152 534-468-854</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="mail" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Email</h5>
                                <p class="text-muted">Promising development turmoil inclusive education transformative community</p>
                                <a href="mailto:contact@example.com" class="text-primary">contact@example.com</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2">
                        <div class="contact-detail text-center">
                            <div class="icon">
                                <i data-feather="map-pin" class="fea icon-md"></i>
                            </div>
                            <div class="content mt-4">
                                <h5 class="title text-uppercase">Location</h5>
                                <p class="text-muted">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                                <a href="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" class="video-play-icon text-primary">View on Google map</a>
                            </div>  
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <section class="section pt-5 mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="custom-form mb-sm-30">
                            <div id="message"></div>
                            <form method="post" action="http://shreethemes.in/cristino/layouts/php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6">
                                                <div class="form-group">
                                                    <input name="name" id="name" type="text" class="form-control border rounded" placeholder="First Name :">
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-12 col-md-6">
                                                <div class="form-group">
                                                    <input name="email" id="email" type="email" class="form-control border rounded" placeholder="Your email :">
                                                </div> 
                                            </div><!--end col-->
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input name="subject" id="subject" class="form-control border rounded" placeholder="Your subject :">
                                                </div>                                                                               
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control border rounded" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Contact End -->

        <!-- Footer Start -->
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <a href="#"><img src="images/logo-light.png" height="20" alt=""></a>
                        <p class="para-desc mx-auto mt-5">Obviously I'm a Web Designer. Experienced with all stages of the development cycle for dynamic web projects.</p>
                        <ul class="list-unstyled mb-0 mt-4 social-icon">
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-vimeo"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="javascript:void(0)"><i class="mdi mdi-linkedin"></i></a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar bg-dark">
            <div class="container text-foot text-center">
                <p class="mb-0">© 2019-20 Cristino. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.shreethemes.in/" target="_blank" class="text-success">Shreethemes</a>.</p>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->
        
        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"> </i> 
        </a>
        <!-- Back to top -->

       
        
@endsection

