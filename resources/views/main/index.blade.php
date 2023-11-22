<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chan Myae Ko Ko</title>

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

<body>
    <!-- start video over layer -->
    <div class="video_over_layer">
        <div class="video_timer">
            <span>33</span>
        </div>
        <button id="video_skip" class="border-0 ">Skip</button>
        <div class="intro_video_container">
            <video controls class="intro_video" width="100%" >
                <source src="./assets/videos/cover_video.mp4">
            </video>
            
        </div>
        
    </div>
    <!-- end video over layer -->

    <!-- start header section -->
    <header class=" header_section">
        <video src="./assets/videos/cover_video.mp4" autoplay loop muted></video>
        <!-- start nav bar -->
        <nav class="navbar py-3 navbar-expand-lg">
            <div class="container">
                <a href="{{route('main.index')}}" class="navbar-brand">
                    <span class="fw-bold h3">Chan Myae Ko Ko</span>
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
                                    <h1 class="wow animate__fadeInUp fw-bold text-uppercase">I am Chan </h1>
                                </div>
                                <div class=" text-uppercase banner_content_info">
                                    <p class="fw-semibold">Graphic Designer</p>
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
                                <img src="./assets/imgs/profiles/home-right.png.webp" style="width: 100%;object-fit: cover;" class="rounded-pill">
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-lg-block">
                        <!-- start show img -->
                        <div class="wow animate__fadeInLeft  p-lg-5 p-md-3 p-sm-1 profile_img_container">
                            <div class="profile_img" style="background-image: url('./assets/imgs/profiles/photo_4_2023-11-02_10-37-40.jpg');"></div>
                        </div>
                        <!-- end show img -->
                    </div>
                    
                </div>
                <div class="col-lg-6  col-md-6 col-sm-12">
                    <div class=" p-2 p-md-3 p-lg-5 intro_content_container">
                        <!-- start global title -->
                        <div class="wow animate__fadeInUp  global_title">
                            <h3 class="text-start text-uppercase">Let's <br> Introdute About Myself</h3>
                            <p class="text-muted ">
                                Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.
                            </p>
                        </div>
                        <!-- end global title -->
                        <div class="wow animate__zoomIn">
                            <!-- start global para -->
                            <div class="global_para">
                                <p class="text-start">
                                    Is give may shall likeness made yielding spirit a itself together created after sea is in beast beginning signs open god you're gathering whose gathered cattle let. Creature whales fruit unto meat the life beginning all in under give two.
                                </p>
                            </div>
                            <!-- end global para -->

                            <!-- start info detail list -->
                            <ul class="list-unstyled">
                                <li>
                                    <span>Name :</span> 
                                    <span class="fw-semibold">Chan Myae Ko Ko</span>
                                </li>
                                <li>
                                    <span>Email :</span> 
                                    <span class="fw-semibold">
                                        <a href="mailto:chamyaekoko200738@gmail.com" class="nav-link d-inline-block">chamyaekoko200738@gmail.com</a>
                                    </span>
                                </li>
                                <li>
                                    <span>Phone :</span> 
                                    <span class="fw-semibold">
                                        <a href="tel:09400110179" class="nav-link d-inline-block">09400110179, 09250200612</a>
                                    </span>
                                </li>
                                <li>
                                    <span>Address :</span> 
                                    <span class="fw-semibold">Between 48 & 49 ,Mya Ye Nandar Housing, Chan Mya Tharzi Tsp, Mandalay</span>
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
                            <h3 class="text-start text-lg-end text-uppercase">Education</h3>
                            <p class="text-muted text-start text-lg-end ">
                                Whose given. Were gathered. There first subdue greater. 
                            </p>
                        </div>
                        <!-- end global title -->
                        <!-- start eductaion content -->
                        <ul class="wow animate__fadeInLeft list-unstyled eductaion_list_group">
                            <li class="education_list_items text-start text-lg-end">
                                <h3 class="text-capitalize">Associateship Government Technical Institute (AGTI)</h3>
                                <span class="text-capitalize">IT Major (present)</span>
                            </li>
                            <li class="education_list_items text-start text-lg-end">
                                <h3 class="text-capitalize">UK</h3>
                                <span class="text-capitalize">Diploma In Graphic Design</span>
                            </li>
                            <li class="education_list_items text-start text-lg-end">
                                <h3 class="text-capitalize">ATBC Local University</h3>
                                <span class="text-capitalize">Diploma  in Graphic Design </span>
                            </li>
                            <li class="education_list_items text-start text-lg-end">
                                <h3 class="text-capitalize">Alpha X Training Center</h3>
                                <span class="text-capitalize">Photoshop and Video Editing </span>
                            </li>
                            <li class="education_list_items text-start text-lg-end">
                                <h3 class="text-capitalize">Yixel Online Class</h3>
                                <span class="text-capitalize">Expert Certified in Photoshop & Illustrator  </span>
                            </li>
                        </ul>
                        <!-- end education content -->
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <div class="d-lg-block">
                            <!-- start show img -->
                            <div class="wow animate__fadeInRight p-lg-5 p-md-3 p-2 profile_img_container ">
                                <div class="profile_img secondary"  style="background-image: url('./assets/imgs/profiles/photo_1_2023-11-02_10-37-40.jpg');"></div>
                            </div>
                            <!-- end show img -->
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="skills_container">
                            <!-- start global title -->
                            <div class="wow animate__fadeInUp  mb-5 mt-5 mt-lg-0 global_title">
                                <h3 class="text-center  text-uppercase">Skills</h3>
                                <p class="text-muted  text-center ">
                                    Whose given. Were gathered. There first subdue greater. 
                                </p>
                            </div>

                            <!-- end global title -->
                            
                            <div class="row justify-content-center">
                                <div class="mb-5 col-lg-3 col-md-6 col-sm-12">
                                    <div class="wow animate__fadeInUp show_skill_container" data-wow-delay="0s">
                                        <div class="d-flex flex-column justify-content-center align-items-center skill_grap_container">
                                            <div class="mb-4 skill_grap">
                                                <div data-tilt class="grap_container hover_ef">
                                                    <div class="grap_bg"></div>
                                                    <div class="grap_line" style="background: conic-gradient(#f88d00 0% 90%,transparent 0% 100%);"></div>
                                                    <div class="show_percentage"><span>90%</span></div>
                                                </div>
                                            </div>
                                            <div class="text-center skill_title"><h3>Adobe</h3></div>
                                            <div class="text-center skill_content"><span>Photo Shop</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-lg-3 col-md-6 col-sm-12">
                                    <div class="wow animate__fadeInUp show_skill_container" data-wow-delay="0.2s">
                                        <div class="d-flex flex-column justify-content-center align-items-center skill_grap_container">
                                            <div class="mb-4 skill_grap">
                                                <div data-tilt class="grap_container hover_ef">
                                                    <div class="grap_bg"></div>
                                                    <div class="grap_line" style="background: conic-gradient(#f88d00 0% 90%,transparent 0% 100%);"></div>
                                                    <div class="show_percentage"><span>90%</span></div>
                                                </div>
                                            </div>
                                            <div class="text-center skill_title"><h3>Adobe</h3></div>
                                            <div class="text-center skill_content"><span>Illustrator</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-lg-3 col-md-6 col-sm-12">
                                    <div class="wow animate__fadeInUp show_skill_container" data-wow-delay="0.4s">
                                        <div class="d-flex flex-column justify-content-center align-items-center skill_grap_container">
                                            <div class="mb-4 skill_grap">
                                                <div data-tilt class="grap_container hover_ef">
                                                    <div class="grap_bg"></div>
                                                    <div class="grap_line" style="background: conic-gradient(#f88d00 0% 90%,transparent 0% 100%);"></div>
                                                    <div class="show_percentage"><span>90%</span></div>
                                                </div>
                                            </div>
                                            <div class="text-center skill_title"><h3>Adobe</h3></div>
                                            <div class="text-center skill_content"><span>Premiere Pro</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-lg-3 col-md-6 col-sm-12">
                                    <div class="wow animate__fadeInUp show_skill_container" data-wow-delay="0.6s">
                                        <div class="d-flex flex-column justify-content-center align-items-center skill_grap_container">
                                            <div class="mb-4 skill_grap">
                                                <div data-tilt class="grap_container hover_ef">
                                                    <div class="grap_bg"></div>
                                                    <div class="grap_line" style="background: conic-gradient(#f88d00 0% 90%,transparent 0% 100%);"></div>
                                                    <div class="show_percentage"><span>90%</span></div>
                                                </div>
                                            </div>
                                            <div class="text-center skill_title"><h3>Adobe</h3></div>
                                            <div class="text-center skill_content"><span>After Effects</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-lg-3 col-md-6 col-sm-12">
                                    <div class="wow animate__fadeInUp show_skill_container" data-wow-delay="0.8s">
                                        <div class="d-flex flex-column justify-content-center align-items-center skill_grap_container">
                                            <div class="mb-4 skill_grap">
                                                <div data-tilt class="grap_container hover_ef">
                                                    <div class="grap_bg"></div>
                                                    <div class="grap_line" style="background: conic-gradient(#f88d00 0% 90%,transparent 0% 100%);"></div>
                                                    <div class="show_percentage"><span>90%</span></div>
                                                </div>
                                            </div>
                                            <div class="text-center skill_title"><h3>Microsoft Office</h3></div>
                                            <div class="text-center skill_content"><span>Word, Excel, Power Point</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5 col-lg-3 col-md-6 col-sm-12">
                                    <div class="wow animate__fadeInUp show_skill_container" data-wow-delay="1s">
                                        <div class="d-flex flex-column justify-content-center align-items-center skill_grap_container">
                                            <div class="mb-4 skill_grap">
                                                <div data-tilt class="grap_container hover_ef">
                                                    <div class="grap_bg"></div>
                                                    <div class="grap_line" style="background: conic-gradient(#f88d00 0% 90%,transparent 0% 100%);"></div>
                                                    <div class="show_percentage"><span>90%</span></div>
                                                </div>
                                            </div>
                                            <div class="text-center skill_title"><h3>Mobile Apps </h3></div>
                                            <div class="text-center skill_content"><span>KineMaster, Cap Cut, Alight Motion, Canva, Procreate</span></div>
                                        </div>
                                    </div>
                                </div>
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
                    <h3 class="text-center text-uppercase">Working Experience</h3>
                    <p class="text-muted text-center ">
                        Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.
                    </p>
                </div>
                <!-- end global title -->
                <!-- start experience content -->
                <div class="">
                    <div class="container">
                        <div class="p-lg-5 p-md-5 p-1 experience_timeline">
                            <div class="wow animate__fadeInLeft experience_content_container left">
                                <div class="experience_content ">
                                    <div class="mb-4 experiece_content_header">
                                        <h3 class="fw-semibold">First Azure Construction Co. Ltd</h3>
                                        <small>18 months </small>
                                    </div>
                                    <div class="experiece_content_body">
                                        <span class="fw-bold">Office Computer Staff </span>
                                        <p>
                                            I started my job at FAC Company as an office computer staffer on February 21, 2020, after GTC was paused because of COVID-19. 
                                            <br>
                                            Initially, I am a junior, and the working process is really heavy for me. I'm also a site supervisor.
                                            <br>
                                            After 2021, I've become particularly proficient with the working process, such as supervising the sites, managing vehicles, machines, and back-holes, as well as their fuel, working hours, and how much each is done in their own tasks.
                                            <br>
                                            The company will cease operations in December 2021. And yeah, I go my way ahead...
                                            <br>
                                            This experience taught me about Microsoft Office (Word, Excel, and PowerPoint), Adobe Photoshop, printing skills, and some management theories.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow animate__fadeInRight experience_content_container right">
                                <div class="experience_content ">
                                    <div class="mb-4 experiece_content_header">
                                        <h3>MAY Construction</h3>
                                        <small>8 months </small>
                                    </div>
                                    <div class="experiece_content_body">
                                        <span class="fw-bold">Graphic Designer & Video Editor  </span>
                                        <p>
                                            Actually, I make not only flyers, vendors, banners, and photoboots but also social media ad designs and commercial motion graphics. But also shooting cinematic commercial videos and announcement videos. I've developed stronger skills in Premiere Pro and some other video editing software.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="wow animate__fadeInLeft experience_content_container left">
                                <div class="experience_content ">
                                    <div class="mb-4 experiece_content_header">
                                        <h3>Freelance Graphic Designer </h3>
                                        <small>14 months </small>
                                    </div>
                                    <div class="experiece_content_body">
                                        <span class="fw-bold"></span>
                                        <p>
                                            Currently, I'm a freelancer. I work freelance and collaborate with my friends' companies.
                                            <br>
                                            And also accept WFH jobs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end experience content -->
            </div>
        </div>
    </section>
    <!-- end experience section -->

    <!-- start service section -->
    <section id="service" class="scrollsection service_section">
        <div class="service_section_container">
            <div class="container">
                <!-- start global title -->
                <div class="wow animate__fadeInUp global_title">
                    <h3 class="text-center text-uppercase">Services</h3>
                    <p class="text-muted text-center ">
                        Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.
                    </p>
                </div>
                <!-- end global title -->
                <div class="py-5 row">
                    <div class="mb-4 col-lg-3 col-md-6 col-sm-12">
                        <div class="wow animate__fadeInUp py-5 service_content_container service_tilt" data-wow-delay="0s">
                            <div class="mb-4 d-flex justify-content-center service_icon_container">
                                <div class="service_icon" style="width: 60px;">
                                    <img src="./assets/imgs/icons/web-design.png" width="100%" alt="web-design">
                                </div>
                            </div>
                            <div class="service_content">
                                <h3 class="text-center text-capitalize">Graphic Design</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-lg-3 col-md-6 col-sm-12">
                        <div class="wow animate__fadeInUp py-5 service_content_container service_tilt" data-wow-delay="0.2s">
                            <div class="mb-4 d-flex justify-content-center service_icon_container">
                                <div class="service_icon" style="width: 60px;">
                                    <img src="./assets/imgs/icons/motion-graphic.png" width="100%" alt="motion-graphic">
                                </div>
                            </div>
                            <div class="service_content">
                                <h3 class="text-center text-capitalize">Motion Graphic</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-lg-3 col-md-6 col-sm-12">
                        <div class="wow animate__fadeInUp py-5 service_content_container service_tilt" data-wow-delay="0.4s">
                            <div class="mb-4 d-flex justify-content-center service_icon_container">
                                <div class="service_icon" style="width: 60px;">
                                    <img src="./assets/imgs/icons/video-editing.png" width="100%" alt="web-design">
                                </div>
                            </div>
                            <div class="service_content">
                                <h3 class="text-center text-capitalize">Video Editing</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 col-lg-3 col-md-6 col-sm-12">
                        <div class="wow animate__fadeInUp py-5 service_content_container service_tilt" data-wow-delay="0.6s">
                            <div class="mb-4 d-flex justify-content-center service_icon_container">
                                <div class="service_icon" style="width: 60px;">
                                    <img src="./assets/imgs/icons/photo.png" width="100%" alt="web-design">
                                </div>
                            </div>
                            <div class="service_content">
                                <h3 class="text-center text-capitalize">Video & Photo shooting</h3>
                            </div>
                        </div>
                    </div>
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
            <div class="wow animate__zoomIn p-1 p-md-3 p-lg-5  show_edition_container">
                <video controls src="./assets/videos/cover_video.mp4" class="w-100"></video>
            </div>
        </div>
    </section>
    <!-- end show edition video -->

    <!-- start collaborator section -->
    <section class="mb-5 collab_section">
        <div class="colla_section_container">
            <div class="container">
                <!-- start global title -->
                <div class="global_title">
                    <h3 class="text-center text-uppercase">Collaborate With</h3>
                    <p class="text-muted text-center ">
                        Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.
                    </p>
                </div>
                <!-- end global title -->
                <!-- start collaborator carousel -->
                <div class="colla_carousel_container">
                    <div id="colla_carousel" class="owl-carousel owl-loaded owl-theme">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/bo.jpg" width="100%" style="object-fit: cover;" alt="shine">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/aungmyintmo.png" width="100%" style="object-fit: cover;" alt="Bo">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/crystal_dream.jpg" width="100%" style="object-fit: cover;" alt="Aung Myint Mo">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/issac.jpg" width="100%" style="object-fit: cover;" alt="Bo">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/np.png" width="100%" style="object-fit: cover;" alt="shine">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/pyaephyoaung.jpg" width="100%" style="object-fit: cover;" alt="shine">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/shine.jpg" width="100%" style="object-fit: cover;" alt="shine">
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="p-2 colla_item_container">
                                        <img src="./assets/imgs/gallery/superior.jpg" width="100%" style="object-fit: cover;" alt="shine">
                                    </div>
                                </div>
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
                    <h3 class="text-center text-uppercase">Social AD Showcase</h3>
                    <p class="text-muted text-center ">
                        Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven midst their. Beast creepeth. Fish days.
                    </p>
                </div>
                <!-- end global title -->
                <!-- start portfolio container -->
                <div class="portfilio_content_container">
                    <div class="portfolio_content portfolio_1">
                        
                        <a href="./assets/imgs/gallery/bo.jpg" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>
                            <img src="./assets/imgs/gallery/bo.jpg" width="100%" height="100%" style="object-fit: cover;" alt="">
                        </a>
                        
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="{{route('mainportfolio.show',1)}}" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_2"> 
                        <a href="./assets/imgs/gallery/aungmyintmo.png" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/aungmyintmo.png" width="100%" height="100%" style="object-fit: cover;" alt="">
                        </a>
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_3"> 
                        <a href="./assets/imgs/gallery/shine.jpg" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/shine.jpg" width="100%" height="100%" style="object-fit: cover;" alt="">
                        </a>
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_4"> 
                        <a href="./assets/imgs/gallery/bo.jpg" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/bo.jpg" width="100%" height="100%" style="object-fit: cover;" alt="">

                        </a>
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_5"> 
                        <a href="./assets/imgs/gallery/issac.jpg" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/issac.jpg" width="100%" height="100%" style="object-fit: cover;" alt="">

                        </a>
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_6">
                        <a href="./assets/imgs/gallery/crystal_dream.jpg" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/crystal_dream.jpg" width="100%" height="100%" style="object-fit: cover;" alt="">

                        </a> 
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_7"> 
                        <a href="./assets/imgs/gallery/pyaephyoaung.jpg" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/pyaephyoaung.jpg" width="100%" height="100%" style="object-fit: cover;" alt="">

                        </a>
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_8"> 
                        <a href="./assets/imgs/gallery/superior.jpg" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/superior.jpg" width="100%" height="100%" style="object-fit: cover;" alt="">

                        </a>
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="portfolio_content portfolio_9"> 
                        <a href="./assets/imgs/gallery/np.png" class="gallery_pop">
                            <span class="d-grid rounded-circle"><i class="fas fa-plus"></i></span>

                            <img src="./assets/imgs/gallery/np.png" width="100%" height="100%" style="object-fit: cover;" alt="">

                        </a>
                        <div class="d-flex justify-content-center port_folio_link_container">
                            <a href="./product_detail.html" class="nav-link">Detail <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
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
                <h3 class="text-center text-uppercase">Chan Myae Ko Ko</h3>
                <p class="text-muted text-center">
                    Graphic Designer
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
                            <li class="footer_list">
                                <span>Graphic Design</span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    Motion Graphic
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>Video Editing</span>
                            </li>
                            <li class="footer_list">
                                <span>Video & Photo Shooting</span>
                            </li>
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
                                    <a href="mailto:chamyaekoko200738@gmail.com" class="nav-link ">chamyaekoko200738@gmail.com</a>
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    <a href="tel: +95 9400110179" class="nav-link  "> 09400110179,09250200612</a>
                                </span>
                            </li>
                            <li class="footer_list">
                                <span>
                                    Between 48 & 49 ,
                                    Mya Ye Nandar Housing,
                                    Chan Mya Tharzi Tsp,
                                    Mandalay
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
                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
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