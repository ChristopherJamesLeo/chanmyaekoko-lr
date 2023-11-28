<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$showUserdata -> name}}</title>

    <!-- owl carousel css2 js1 -->
    <!-- <link rel="stylesheet" href="./assets/libs/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="./assets/libs/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"> -->

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- get bootstrap css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/dist/css/style.css')}}">
</head>
<body>
    <!-- start header section -->
    <header class=" header_section">

        <!-- start nav bar -->
        <nav class=" bg-white py-3 navbar ">
            <div class="container">
                <div class="w-100 d-flex justify-content-between align-items-center ">
                    <a href="{{route('main.index')}}" class="nav-link"><i class="fas fa-caret-left"></i> &nbsp; Home</a>
                    <a href="{{route('main.index')}}" class="navbar-brand">
                        <span class="fw-bold h3">{{$showUserdata -> name}}</span>
                    </a>
                </div>
                
            </div>
            

        </nav>
        <!-- end nav bar -->
        <!-- start sub banner section -->
        <section class="sub_banner_section">
            <div class="sub_banner_section_container"  style="background-image: linear-gradient(to right,rgba(0,0,0,0.5),rgba(0,0,0,0)),url({{asset('assets/imgs/banners/portfoliobanner.jpg')}});"> 
                <div class="container">
                    <!-- start sub banner content container -->
                    <div class="sub_banenr_content_container">
                        <h3 class="text-white">Portfolio</h3>
                    </div>
                    <!-- end sub banner content container -->
                </div>
            </div>
        </section>
        <!-- end sub banner section -->
    </header>
    <!-- end header section -->

    <!-- start portfolio section -->
    <section class="py-5">
        <div class="">
            <div class="container">
                <div class="row">
                    @foreach($portfolios as $portfolio)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                        <div class="port_folio_content_container"> 
                            <a href="{{route('mainportfolio.show',$portfolio->id)}}" class="nav-link">
                                <div class="portfolio_img_container">
                                    <div class="over_layer_primary"></div>
                                    <div class="over_layer_secondary"></div>
                                    <div class="portfolio_link">
                                        <a href="{{route('mainportfolio.show',$portfolio->id)}}" class="nav-link"><i class="fas fa-link"></i></a>
                                    </div>
                                    <img src="{{asset('assets/imgs/logos/'.$portfolio->image)}}" width="100%" alt="{{$portfolio->name}}">
                                </div>
                                <div class="img_title mt-3">
                                    <h4 class="fw-light text-center">{{$portfolio->name}}</h4>
                                </div>
                            </a>
                        </div>

                    </div>
                    @endforeach

                    
                </div>
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
    <!-- <script src="./assets/libs/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script> -->

    <!-- owl carousel css2 js1 -->
    <!-- <script src="./assets/libs/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script> -->

    <!-- custom js  -->
    <script src="{{asset('./assets/dist/js/portfolio.js')}}"></script>
</body>
</html>