<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- google font inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">

    <!-- font-family: 'Inter', sans-serif;  -->

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- get bootstrap css1 js1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="./../assets/dist-adm/css/style.css">
</head>
<body>
    
    <!-- start dashboard container -->
    <div class="d-flex justify-content-between align-items-start">
        <!-- start dashboard side bar contaienr -->
        <div id="left_side_container" class="left_side_container ">
            <!-- start side bar section -->
            <aside class="p-4 aside_container">
                <div class="mb-3 d-flex justify-content-between align-items-center aside_header">
                    <a href="#" class="nav-link "><h3 class="">{{ Auth::user()->name}}</h3></a>
                    <button class="p-0 border-0 outline-none shadow-none nav_toggle_btn" onclick="navBtn()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                </div>
                <div class="aside_list_container">
                    <div class="list_header">
                        <h3 class="">
                            <i class="fas fa-ellipsis-h"></i><span>Main</span>
                        </h3>
                    </div>
                    <ul class="list-unstyled text-capitalize">
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link active">
                                <i class="fas fa-cubes" title="Dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    <div class="list_header">
                        <h3 class="">
                            <i class="fas fa-ellipsis-h" title="Page Edit"></i><span>Page Edit</span>
                        </h3>
                    </div>
                    <ul class="list-unstyled text-capitalize">
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-microscope" title="About"></i> <span>About</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-user-graduate" title="Education"></i> <span>Education</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-coins" title="Skill"></i><span>Skill</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-vial" title="Experience"></i> <span>Experience</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-hammer" title="Service"></i><span>Service</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-video" title="Edition"></i><span>Edition</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="far fa-object-group" title="Collaborate"></i><span>Collaborate</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-photo-video" title="Portfolio"></i><span>Portfolio</span>
                            </a>
                        </li>
                    </ul>
                    <div class="list_header">
                        <h3 class="">
                            <i class="fas fa-ellipsis-h" title="Bio"></i><span>Bio</span>
                        </h3>
                    </div>
                    <ul class="list-unstyled text-capitalize">
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-user" title="Profile"></i><span>Profile</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-link" title="Links"></i><span>Links</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-phone" title="Phone"></i><span>Phones</span>
                            </a>
                        </li>
                    </ul>
                    <div class="list_header">
                        <h3 class="">
                            <i class="fas fa-ellipsis-h" title="Management"></i><span>Management</span>
                        </h3>
                    </div>
                    <ul class="list-unstyled text-capitalize">
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-tasks" title="Title"></i><span>Titles</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-wrench" title="Types"></i><span>Types</span>
                            </a>
                        </li>
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-info-circle" title="Status"></i><span>Status</span>
                            </a>
                        </li>
                    </ul>
                    <div class="list_header">
                        <h3 class="">
                            <i class="fas fa-ellipsis-h" title="Authentication"></i><span>Authentication</span>
                        </h3>
                    </div>
                    <ul class="list-unstyled text-capitalize">
                        <li class="py-2">
                            <a href="javascript:void(0)" class="nav-link ">
                                <i class="fas fa-key" title="Login"></i><span>Login</span>
                            </a>
                        </li>
                    </ul>
                    <div class="list_header">
                        <h3 class="">
                            <i class="fas fa-ellipsis-h" ></i><span>Theme</span>
                        </h3>
                    </div>
                    <ul class="list-unstyled text-capitalize">
                        <li class="py-2">
                            <label class="darkmode_btn ui-switch">
                                <input type="checkbox" id="night_mode" >
                                <div class="slider">
                                  <div class="circle"></div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- end side bar section -->
        </div>

        <!-- end dashboard side bar contaienr -->

        <!-- start dashboard right side container -->
        <div class="ms-auto right_side_container">
            <header class="p-2 dashboard_header">
                <nav class="d-flex justify-content-between justify-content-lg-end align-items-center dash_nav_bar">
                    
                    <button class="d-block d-lg-none p-0 border-0 outline-none shadow-none nav_toggle_btn" onclick="navBtn()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="d-flex justify-content-end align-items-center gap-3 nav_content_container">
                        <!-- <div class="language_container">
                            <span>Language</span>
                        </div> -->
                        <div class="email_container">
                            <a href="mailto:{{$userdata->email}}" class="nav-link"><i class="fas fa-envelope"></i></a>
                        </div>
                        <div class="user_profile">
                            <a href="javascript:void(0)" class="nav-link">
                                <img src="{{asset('assets/imgs/profiles/'.$userdata->image)}}" width="42px" height="42px" style="object-fit: cover;" class="rounded-circle" alt="{{$userdata->firstname}}">
                            </a>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- start content area -->
            <div class="p-3 content_area_container">
                <div class="p-3 content_area">
                    <div class="iframe_container h-100 active">
                        <iframe src="http://127.0.0.1:8000/maindashboards" width="100%" height="100%" frameborder="0"></iframe>
                    </div>
                    
                </div>
            </div>
            <!-- end content area -->
        </div>
        <!-- start header -->

        <!-- end header -->

        <!-- end dashboard right side container -->
    </div>
    <!-- end dashboard container -->
    

    <!-- footer section -->
    <footer class="footer_section">
        <div class="footer_section_container">
            
        </div>
    </footer>
    <!-- end footer section -->
    

    <!-- get bootstrap css1 js1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- jquery 3.6.3 -->
    <script src="./../assets/libs/jquery3-6-3.js"></script>

    <!-- custom theme mode js1-->
    <script src="./../assets/dist-adm/js/thememode.js"></script>

    <!-- custom js -->
    <script src="./../assets/dist-adm/js/main.js"></script>
</body>
</html>