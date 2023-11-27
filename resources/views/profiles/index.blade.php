@extends("layouts.pagesindex")

@section("content")
    
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="content_container profile_main_container">  
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-12">
                        <div class="mb-4 py-4 px-3 border  rounded-1 profile_container">
                            <div class="mb-3 text-center profile_img">
                                <img src="{{asset('assets/imgs/profiles/'.$userdata->image)}}" width="150px" height="150px" class="rounded-circle" style="object-fit: cover;" alt="">
                                <span><a href="javascript:void(0)" class="profile_edit_btn"><i class="fas fa-edit"></i></a></span>
                            </div>
                            <div class="text-center profile_name">
                                <a href="#" class="nav-link"><h3>{{$userdata->firstname}}</h3></a>
                                <span>{{$userdata->job}}</span>
                            </div>
                        </div>
                        <div class="profile_img_edit_container ">
                            <div class="profile_img_edit_form">
                                <div class="d-flex flex-column gap-4 justify-content-center align-items-center rofile_img_preview_container">
                                    <div class="profile_img_container">
                                        <img src="{{asset('assets/imgs/profiles/'.$userdata->image)}}" width="100%" style="object-fit: cover;" alt="">
                                    </div>
                                    <form action="{{route('profileimage.upload',$userdata->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf 
                                        @method("PUT")
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <input type="file" name="image" id="img_box" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required >
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                            <button type="submit" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                                            <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                            <a href="javascript:void(0)" class="btn rounded-1 profile_edit_cancel"><i class="fas fa-angle-left me-2"></i> Cancel </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 border  profile_contact_link">
                            <h3>Links</h3>
                            <ul class="list-unstyled profile_links">
                                <li class="py-1 d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex justify-content-start align-items-center gap-1 links_title">
                                        <i class="fas fa-globe me-2"></i>
                                        <div class="p-2 d-flex justify-content-between gap-2">
                                            <a href="./../editpages/contentlinkedit.html" class="nav-link"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="nav-link"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="nav-link">www.chanmyaekoko.com</a>
                                </li>
                                <li class="py-1 d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex justify-content-start align-items-center gap-1 links_title">
                                        <i class="fab fa-facebook-f me-2"></i>
                                        <div class="p-2 d-flex justify-content-between gap-2">
                                            <a href="./../editpages/contentlinkedit.html" class="nav-link"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="nav-link"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="nav-link">chanmyaekoko</a>
                                </li>
                                <li class="py-1 d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex justify-content-start align-items-center gap-1 links_title">
                                        <i class="fab fa-viber me-2"></i>
                                        <div class="p-2 d-flex justify-content-between gap-2">
                                            <a href="./../editpages/contentlinkedit.html" class="nav-link"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="nav-link"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="nav-link">chanmyaekoko</a>
                                </li>
                                <li class="py-1 d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex justify-content-start align-items-center gap-1 links_title">
                                        <i class="fab fa-telegram-plane me-2"></i>
                                        <div class="p-2 d-flex justify-content-between gap-2">
                                            <a href="./../editpages/contentlinkedit.html" class="nav-link"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="nav-link"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="nav-link text-end">chanmyaekoko</a>
                                </li>
                                <li class="py-1 d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex justify-content-start align-items-center gap-1 links_title">
                                        <i class="fas fa-envelope me-2"></i>
                                        <div class="p-2 d-flex justify-content-between gap-2">
                                            <a href="./../editpages/contentlinkedit.html" class="nav-link"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="nav-link"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <a href="#" class="nav-link">chanmyaekoko@gmail.com</a>
                                </li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="mb-4 py-4 px-3 border rounded-1 profile_info_container">
                            <h3>About</h3>
                            <ul class="list-unstyled profile_infos">
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Full Name</span>
                                        </div>
                                        <div class="col-9">
                                            <span>{{$userdata->name}}</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Email</span>
                                        </div>
                                        <div class="col-9">
                                            <span>{{$userdata->email}}</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Phone</span>
                                        </div>
                                        <div class="col-9">
                                            <span>09400110179</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Phone</span>
                                        </div>
                                        <div class="col-9">
                                            <span>09250200612 </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Address</span>
                                        </div>
                                        <div class="col-9">
                                            <span>{{$userdata->address}}</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- start btn container -->
                            <div class="mt-4 d-flex flex-wrap justify-content-end align-items-center gap-2">
                                <a href="{{route('profiles.edit',$userdata->id)}}" id="update_btn" class="nav-link btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>
                                
                            </div>
                            <!-- end btn container   -->
                        </div>

                        <div class="mb-4 p-3 border  profile_contact_link">
                            <h3>Education</h3>
                            <!-- start eductaion content -->
                            <ul class="list-unstyled eductaion_list_group">
                                @foreach($educations as $education)
                                <li class="mb-2 education_list_items text-start">
                                    <h3 class="m-0 text-capitalize">{{$education->institude}}</h3>
                                    <span class="text-capitalize">{{$education->degree}}</span>
                                </li>
                                @endforeach

                            </ul>
                            <!-- end education content -->
                        </div>

                        
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="mb-4 py-4 px-3 border rounded-1 professional_jobs">
                                    <h3>Services</h3>
                                    <ul class="list-unstyled professional_jobs_infos">
                                        @foreach($services as $service)
                                        <li class="py-1">
                                            <span>{{ $service -> name }}</span>
                                        </li>
                                        @endforeach
                                        
                                    
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-1">
                                <div class="mb-4 py-4 px-3 border rounded-1 skills">
                                    <h3>Skills</h3>
                                    <ul class="list-unstyled professional_jobs_infos">

                                        @foreach($skills as $skill)
                                        <li class="py-1">
                                            <span>{{$skill -> type}}</span>
                                        </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("customscript")
    <!-- start custom  js -->
    <script>

        // start profile edti btn
        document.querySelector(".profile_edit_btn").addEventListener('click',function(){
            document.querySelector(".profile_img_edit_container").classList.add("active");
        })

        document.querySelector(".profile_edit_cancel").addEventListener('click',function(){
            document.querySelector(".profile_img_edit_container").classList.remove("active");
        })
        // end profile edit btn
        // start show preview img
        let getImgBox = document.querySelector("#img_box");
        let showPreviewImg = document.querySelector(".profile_img_container img");

        getImgBox.addEventListener("change",function(e){
            // document.querySelector(".profile_img_edit_container").classList.add("active");
            var fileReader = new FileReader();
            
            fileReader.onload = function(e){
                showPreviewImg.setAttribute("src",e.target.result);
            }
            fileReader.readAsDataURL(this.files[0]);
        })
        // end show preview img
    </script>
    <!-- end custom  js -->
@endsection


