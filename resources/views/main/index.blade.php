<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$showUserdata->name}}</title>

    <!-- magnific pop up css1 js1 -->
    <link rel="stylesheet" href="{{asset('./assets/libs/Magnific-Popup-master/dist/magnific-popup.css')}}">

    <!-- owl carousel css2 js1 -->
    <link rel="stylesheet" href="{{asset('./assets/libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('./assets/libs/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- get bootstrap css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- wow js -->
    <link rel="stylesheet" href="{{asset('./assets/libs/WOW-master/css/libs/animate.css')}}">
    <!-- animate style  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('./assets/dist/css/style.css')}}">
</head>

<body style="background-image: url({{asset('assets/imgs/backgrounds/body-bg.png.webp')}});">
    <!-- start video over layer -->
    <!-- <div class="video_over_layer">
        <div class="video_timer">
            <span>33</span>
        </div>
        <button id="video_skip" class="border-0 ">Skip</button>
        <div class="intro_video_container">
            @foreach($activeEditions as $activeEdition)
            <video src="{{asset('assets/videos/'.$activeEdition->name)}}" controls class="intro_video" width="100%" ></video>
            @endforeach
        </div>
        
    </div> -->
    <!-- end video over layer -->

    <!-- start header section -->
    <header class=" header_section">
        @foreach($activeEditions as $activeEdition)
        <video src="{{asset('assets/videos/'.$activeEdition->name)}}" autoplay loop muted></video>
        @endforeach
        <!-- start nav bar -->
        <nav class="navbar py-3 navbar-expand-lg">
            <div class="container">
                <a href="{{route('main.index')}}" class="navbar-brand">
                    <span class="fw-bold h3">{{$showUserdata->name}}</span>
                </a>
                <button onclick="nav()" class="p-0 navbar-toggler active border-0 outline-none shadow-none" data-bs-target="#mynav" data-bs-toggle="collapse">
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox" class="toggle">
                      <div class="bar bar--top"></div>
                      <div class="bar bar--middle"></div>
                      <div class="bar bar--bottom"></div>
                    </label>
                </button>
                <div id="mynav" class="navbar-collapse collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item px-3"><a href="#home" class="fw-semibold nav-link active scrollNav">Home</a></li>
                        <li class="nav-item px-3"><a href="#resume" class="fw-semibold nav-link scrollNav">Resume</a></li>
                        <li class="nav-item px-3"><a href="#service" class="fw-semibold nav-link scrollNav">Service</a></li>
                        <li class="nav-item px-3"><a href="#portfolio" class="fw-semibold nav-link scrollNav">Showcase</a></li>
                        <li class="nav-item px-3"><a href="#contact" class="fw-semibold nav-link scrollNav">Contact</a></li>
                        <li class="nav-item px-3 d-flex justify-content-center align-items-center">
                            <ul class="list-unstyled d-flex  m-0 p-0">
                                <li class="px-2"><a href="#" id="" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="px-2"><a href="#" id="" class="nav-link"><i class="fab fa-viber"></i></a></li>
                                <li class="px-2"><a href="#" id="" class="nav-link"><i class="fab fa-telegram-plane"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            

        </nav>
        <!-- end nav bar -->
        <!-- start banner section -->
        <section id="home" class="scrollsection py-4 banner_section">
            <div class="py-5 banner_section_container">
                <div class="container">
                    <div class=" row">
                        <div class="col-lg-7 col-md-12 col-sm-12">
                            <div class="h-100  d-flex flex-column justify-content-center banner_content_container">
                                <div class="banner_content_sub_title">
                                    <h2 class="fw-semibold text-uppercase">Hello</h2>
                                </div>
                                <div class="banner_content_title">
                                    <h1 class="wow animate__fadeInUp fw-bold text-uppercase">I am {{$showUserdata->firstname}} </h1>
                                </div>
                                <div class=" text-uppercase banner_content_info">
                                    <p class="fw-semibold"> {{$showUserdata->job}}</p>
                                </div>
                                <div class="pt-3">
                                    <div class="d-flex gap-4">
                                        <!-- <button class=" global">
                                            <span class="label">
                                                <span>Button</span>
                                            </span>
                                            <span class="overlayer"></span>
                                        </button> -->
                                        <a href="#" class="nav-link d-inline-block global_btn">
                                            <span class="label">
                                                <span>Hire Me</span>
                                            </span>
                                            <span class="overlayer"></span>
                                        </a>
                                        <a href="#" class="nav-link d-inline-block global_btn secondary">
                                            <span class="label">
                                                <span>Get Cv</span>
                                            </span>
                                            <span class="overlayer"></span>
                                        </a>
                                    </div>
                                    <!-- <a href="#" class="text-uppercase nav-link global_btn">Hire Me</a> -->
                                    <!-- <a href="javascript:void(0)" class="text-uppercase nav-link global_btn secondary">Get Cv</a> -->
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5  d-none d-lg-block banner_img_container">
                            <div class="h-100 d-flex align-items-end overflow-hidden banner_img_container">
                                <!-- <img src="./assets/imgs/profiles/photo_3_2023-11-02_10-37-40.jpg" style="width: 100%;object-fit: cover;" class="rounded-pill"> -->
                                <img src="{{asset('./assets/imgs/profiles/home-right.png.webp')}}" style="width: 100%;object-fit: cover;" class="rounded-pill">
                                <!-- <img src="./assets/imgs/banners/banner_img.png" style="width: 100%;object-fit: cover;" class=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner section -->

    </header>
    <!-- end header section -->

    <!-- start intro section -->
    <section id="resume" class="scrollsection py-5 intro_section">
        <div class="container">
            <div class="row">
                @foreach($Abouts as $About)
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-lg-block">
                        <!-- start show img -->
                        <div class="wow animate__fadeInLeft  p-lg-5 p-md-3 p-sm-1 profile_img_container">
                            <div class="profile_img" style="background-image: url({{asset('assets/imgs/banners/'.$About->image)}});"></div>
                        </div>
                        <!-- end show img -->
                    </div>
                    
                </div>
                <div class="col-lg-6  col-md-6 col-sm-12">
                    <div class=" p-2 p-md-3 p-lg-5 intro_content_container">
                        <!-- start global title -->
                        <div class="wow animate__fadeInUp  global_title">
                            <h3 class="text-start text-uppercase ">{{$About->subname}}</h3>
                            
                        </div>
                        @endforeach
                        <!-- end global title -->
                        <div class="wow animate__zoomIn">
                            <!-- start global para -->
                            <div class="global_para">
                                @foreach($activeAbouts as $activeAbout)
                                <p class="text-start">
                                    {{$activeAbout->about}}
                                </p>
                            @endforeach
                            </div>
                            <!-- end global para -->

                            <!-- start info detail list -->
                            <ul class="list-unstyled">
                                <li>
                                    <span>Name :</span> 
                                    <span class="fw-semibold">{{$showUserdata -> name}}</span>
                                </li>
                                <li>
                                    <span>Email :</span> 
                                    <span class="fw-semibold">
                                        <a href="mailto:{{$showUserdata->email}}" class="nav-link d-inline-block">{{$showUserdata->email}}</a>
                                    </span>
                                </li>
                                <li>
                                    <span>Phone :</span> 
                                    <span class="fw-semibold">
                                        @foreach($activePhones as $phone)
                                            @foreach($activePhone as $activePh)
                                            <a href="tel:{{$activePh->name}}" class="nav-link d-inline-block">{{$phone -> name}}</a>
                                            @endforeach
                                        @endforeach
                                    </span>
                                </li>
                                <li>
                                    <span>Address :</span> 
                                    <span class="fw-semibold">{{$showUserdata -> address}}</span>
                                </li>
                            </ul>
                            <!-- end info detail list    -->
                        </div>
                        

                        <div class="mt-5 d-flex down_load_btn_container">
                            <a href="#" class="nav-link d-inline-block global_btn">
                                <span class="label">
                                    <span>Download Cv</span>
                                </span>
                                <span class="overlayer"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end intro section -->

    <!-- start education section -->
    <section class="py-5 education_section ">
        <div class="education_section_container">
            <div class="container">
                <div class="row">
                    <div class="p-2 p-md-3 p-lg-5 col-lg-6  col-md-6 col-sm-12">
                        <!-- start global title -->
                        <div class="wow animate__fadeInUp  global_title">
                            @foreach($Educations as $Education)
                            <h3 class="text-start text-lg-end text-uppercase">{{$Education -> name}}</h3>
                            <p class="text-muted text-start text-lg-end text-lowercase">
                                {{$Education->subname}}
                            </p>
                            @endforeach
                        </div>
                        <!-- end global title -->
                        <!-- start eductaion content -->
                        <ul class="wow animate__fadeInLeft list-unstyled eductaion_list_group">
                            @foreach($activeEducations as $activeEducation)
                            <li class="education_list_items text-start text-lg-end">
                                <h3 class="text-capitalize">{{$activeEducation->institude}}</h3>
                                <span class="text-capitalize">{{$activeEducation -> degree}}</span>
                            </li>
                            @endforeach
                        </ul>
                        <!-- end education content -->
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <div class="d-lg-block">
                            <!-- start show img -->
                            <div class="wow animate__fadeInRight p-lg-5 p-md-3 p-2 profile_img_container ">
                                @foreach($Educations as $Education)
                                <div class="profile_img secondary"  style="background-image: url({{asset('assets/imgs/banners/'.$Education->image)}});"></div>
                                @endforeach
                            </div>
                            <!-- end show img -->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="skills_container" style="background-image: url({{asset('assets/imgs/backgrounds/home-banner.png.webp')}});">
                            <!-- start global title -->
                            <div class="wow animate__fadeInUp  mb-5 mt-5 mt-lg-0 global_title">
                                @foreach($Skills as $Skill)
                                <h3 class="text-center  text-uppercase">{{$Skill -> name}}</h3>
                                <p class="text-muted  text-center text-lowercase">
                                {{$Skill -> subname}} 
                                </p>
                                @endforeach
                                
                            </div>

                            <!-- end global title -->
                            
                            <div class="row justify-content-center">
                                <?php
                                    $time = 0;
                                ?>
                                @foreach($activeSkills as $activeSkill)
                                <div class="mb-5 col-lg-3 col-md-6 col-sm-12">
                                    <div class="wow animate__fadeInUp show_skill_container" data-wow-delay="<?php echo $time  ?>s">
                                        <div class="d-flex flex-column justify-content-center align-items-center skill_grap_container">
                                            <div class="mb-4 skill_grap">
                                                <div data-tilt class="grap_container hover_ef">
                                                    <div class="grap_bg"></div>
                                                    <div class="grap_line" style="background: conic-gradient(#f88d00 0% 90%,transparent 0% 100%);"></div>
                                                    <div class="show_percentage"><span>{{$activeSkill -> level }}%</span></div>
                                                </div>
                                            </div>
                                            <div class="text-center skill_title"><h3>{{$activeSkill -> subject }}</h3></div>
                                            <div class="text-center skill_content"><span>{{$activeSkill -> type }}</span></div>
                                        </div>
                                    </div>
                                </div>

                                <?php $time += 0.2 ?>
                                @endforeach
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- end education section -->

    <!-- start experience section -->
    <section class="experience_section">
        <div class="experience_section_container">
            <div class="container">
                <!-- start global title -->
                <div class="wow animate__fadeInUp global_title">
                    @foreach($Experiences as $Experience)
                    <h3 class="text-center text-uppercase">{{$Experience -> name}}</h3>
                    <p class="text-muted text-center text-lowercase">
                        {{$Experience -> subname}}
                    </p>
                    @endforeach
                </div>
                <!-- end global title -->
                <!-- start experience content -->
                <div class="">
                    <div class="container">
                        <div class="p-lg-5 p-md-5 p-1 experience_timeline" style="overflow:scroll;">
                            @foreach($activeExperiences as $activeExperience )
                            <div class="wow animate__zoomIn  experience_content_container ">
                                <div class="experience_content ">
                                    <div class="mb-4 experiece_content_header">
                                        <h3 class="fw-semibold">{{$activeExperience -> company}}</h3>
                                        <small>{{$activeExperience -> duration}} months </small>
                                    </div>
                                    <div class="experiece_content_body">
                                        <span class="fw-bold">{{$activeExperience -> position}} </span>
                                        <p>
                                            {{$activeExperience -> description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- end experience content -->
            </div>
        </div>
    </section>
    <!-- end experience section -->

    <!-- start service section -->
    <section id="service" class="scrollsection service_section" style="background-image: url({{asset('assets/imgs/backgrounds/home-banner.png.webp')}});">
        <div class="service_section_container">
            <div class="container">
                <!-- start global title -->
                <div class="wow animate__fadeInUp global_title">
                    @foreach($Services as $Service)
                    <h3 class="text-center text-uppercase">{{$Service -> name}}</h3>
                    <p class="text-muted text-center text-lowercase">
                        {{$Service -> subname}}
                    </p>
                    @endforeach
                </div>
                <!-- end global title -->
                <div class="py-5 row">
                    <?php $time = 0 ;?>
                    @foreach($activeServices as $activeService)
                    <div class="mb-4 col-lg-3 col-md-6 col-sm-12">
                        <div class="wow animate__fadeInUp py-5 service_content_container service_tilt" data-wow-delay="<?php echo $time;?>s">
                            <div class="mb-4 d-flex justify-content-center service_icon_container">
                                <div class="service_icon" style="width: 60px;">
                                    <img src="{{asset('assets/imgs/icons/'.$activeService->image)}}" width="100%" alt="web-design">
                                </div>
                            </div>
                            <div class="service_content">
                                <h3 class="text-center text-capitalize">{{$activeService -> name }}</h3>
                            </div>
                        </div>
                    </div>
                    <?php
                        $time += 0.2 ;
                    ?>
                    
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- start show edition video -->
    <section class="py-5 show_edition">
        <div class="container">
            <!-- start global title -->
            <!-- <div class="global_title">
                <h3 class="text-center text-uppercase">Working Experience</h3>
                <p class="text-muted text-center ">
                    Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.
                </p>
            </div> -->
            <!-- end global title -->

            @foreach($activeEditions as $activeEdition)
            <div class="wow animate__zoomIn p-1 p-md-3 p-lg-5  show_edition_container">
                <video controls src="{{asset('assets/videos/'.$activeEdition->name)}}" class="w-100"></video>
            </div>
            @endforeach
        </div>
    </section>
    <!-- end show edition video -->

    <!-- start collaborator section -->
    <section class="mb-5 collab_section">
        <div class="colla_section_container">
            <div class="container">
                <!-- start global title -->
                <div class="global_title">
                    @foreach($Collaborates as $Collaborate)
                    <h3 class="text-center text-uppercase">{{$Collaborate -> name}}</h3>
                    <p class="text-muted text-center text-lowercase">
                        {{$Collaborate -> subname}}
                    </p>
                    @endforeach
                </div>
                <!-- end global title -->
                <!-- start collaborator carousel -->
                <div class="colla_carousel_container">
                    <div id="colla_carousel" class="owl-carousel owl-loaded owl-theme">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @foreach($activeCollaboraters as $activeCollaborater)
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="{{asset('assets/imgs/gallery/'.$activeCollaborater->image)}}" width="100%" style="object-fit: cover;" alt="{{$activeCollaborater->slug}}">
                                    </div>
                                </div>
                                @endforeach
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end collaborator carousel -->
            </div>
        </div>
    </section>
    <!-- end collaborator section -->

    <!-- start portfolio section -->
    <section id="portfolio" class="scrollsection mb-5 portfolio_section">
        <div class="protfolio_section_container">
            <div class="container">
                <!-- start global title -->
                <div class="mb-5 global_title">
                    @foreach($Portfolios as $Portfolio)
                    <h3 class="text-center text-uppercase">{{$Portfolio -> name}}</h3>
                    <p class="text-muted text-center text-lowercase">
                        {{$Portfolio -> subname}}
                    </p>
                    @endforeach
                </div>
                <!-- end global title -->
                <!-- start portfolio container -->
                <div class="portfilio_content_container">
                    <?php $times = 1;  ?>
                    @foreach($activeProducts as $activeProduct)
                    <div class="portfolio_content portfolio_<?php echo $times; ?>">
                        
                        <a href="{{asset('assets/imgs/logos/'.$activeProduct->image)}}" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>
                            <img src="{{asset('assets/imgs/logos/'.$activeProduct->image)}}" width="100%" height="100%" style="object-fit: cover;" alt="{{$activeProduct->name}}">
                        </a>
                        
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="{{route('mainportfolio.show',$activeProduct->id)}}" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <?php
                        $times += 1;
                    ?>
                    
                    @endforeach
                    
                </div>

                <div class="py-5 d-flex justify-content-center">
                    
                    <a href="{{route('mainportfolio.index')}}" class="nav-link d-inline-block global_btn" style="padding: 15px 55px;">
                        <span class="label"> 
                            <span>Portfolio . . .</span>
                        </span>
                        <span class="overlayer"></span>
                    </a>
                </div>
                <!-- end portfolio content container -->
            </div>
            
        </div>
    </section>
    <!-- end portfolio section -->

    <!-- start footer section -->
    <footer id="contact" class="scrollsection bg-white py-5 footer_section">
        <div class="container">
            <!-- start global title -->
            <div class=" global_title">
                <h3 class="text-center text-uppercase">{{$showUserdata->name}}</h3>
                <p class="text-muted text-center">
                    {{$showUserdata->job}}
                </p>
            </div>
            <!-- end global title -->
            <div class="mt-2 row">
                <div class="col-lg-4 col-md-6 col-sm-12  ">
                    <div class="footer_content_header">
                        <h3>Services</h3>
                    </div>
                    <div class="footer_content_body">
                        <ul class="list-unstyled">
                        @foreach($activeServices as $activeService)
                            <li class="footer_list">
                                <span>{{$activeService -> name}}</span>
                            </li>
                        @endforeach
                            
                        </ul>
                    </div>
                    
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12  ">
                    <div class="footer_content_header">
                        <h3>Quick Link</h3>
                    </div>
                    <div class="footer_content_body">
                        <ul class="list-unstyled">
                            <li class="footer_list">
                                <span>
                                    <a href="#home" class="nav-link">Home</a>
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    <a href="#resume" class="nav-link">Resume</a>
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    <a href="#service" class="nav-link">Service</a>
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    <a href="#portfolio" class="nav-link">Portfolio</a>
                                </span>
                            </li>
                            
                        </ul>
                    </div>
                    
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="footer_content_header">
                        <h3>Contact</h3>
                    </div>
                    <div class="footer_content_body">
                        <ul class="list-unstyled">
                            <li class="footer_list">
                                <span>
                                    <a href="mailto:{{$showUserdata -> email}}" class="nav-link ">{{$showUserdata -> email}}</a>
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    @foreach($activePhones as $phone)
                                            @foreach($activePhone as $activePh)
                                            <a href="tel:{{$activePh->name}}" class="nav-link d-inline-block">{{$phone -> name}}</a>
                                            @endforeach
                                    @endforeach</a>
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    {{$showUserdata -> address}}
                                </span>
                            </li>
                            <li  class="footer_list">
                                <ul class=" list-unstyled d-flex m-0 p-0 contact_link">
                                    <li class="px-2">
                                        <a href="#" id="" class="nav-link">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="px-2">
                                        <a href="#" id="" class="nav-link">
                                            <i class="fab fa-viber"></i>
                                        </a>
                                    </li>
                                    <li class="px-2">
                                        <a href="#" id="" class="nav-link">
                                            <i class="fab fa-telegram-plane"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <a href="{{ url('/dashboards') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif -->
                            </li>
                        </ul>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- copy right -->
        <div class="copy_right_company">
            <small>
                <span>Copyright &copy; <span id="copyRightYear"></span>&nbsp;<span>Designed By : Ninth Programming</span></span>
            </small>
            
        </div>
        <!-- copy right -->
    </footer>
    <!-- end footer section -->
    <!-- get bootstrap css1 js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- jquery 3.6.3 -->
    <script src="{{asset('./assets/libs/jquery3-6-3.js')}}"></script>

    <!-- magnific pop up css1 js1 -->
    <script src="{{asset('./assets/libs/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>

    <!-- owl carousel css2 js1 -->
    <script src="{{asset('./assets/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>

    <!-- owl js css0 js1 -->
    <script src="{{asset('./assets/libs/WOW-master/dist/wow.min.js')}}"></script>

    <!-- tilt js -->
    <script src="{{asset('./assets/libs/tilt.js-master/dest/tilt.jquery.min.js')}}"></script>

    <script src="{{asset('./assets/dist/js/index.js')}}"></script>
</body>
</html>