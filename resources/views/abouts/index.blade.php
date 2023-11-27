@extends("layouts.pagesindex")

@section("content")
<div class="row">
        <div class="col-lg-6 col-md-12 mb-2">
            <div class="content_img_container">
                @foreach($titles as $title)
                <div class="rounded-2 content_img " style="background-image: url({{asset('assets/imgs/banners/'.$title->image)}});"></div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-2">
            <div class="content_container">
                @foreach($titles as $title)
                <!-- global content title -->
                <div class="mb-3 content_title">
                    <h3 class="text-start text-uppercase">{{$title -> name}}</h3>
                    <span class="text-uppercase h5 sub_title">{{$title->subname}}</span>
                </div>
                <!-- end global contetn title -->
                <!-- start btn container -->
                <div class="mt-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <a href="javascript:void(0)" id="update_btn" class="nav-link btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>
                    
                </div>
                <!-- end btn container   -->
                <!-- start update form -->
                <div class="p-2 pt-4 update_form_container">
                    <form action="{{route('titles.update',$title->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Title" required value="{{$title -> name}}">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="subname" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required value="{{$title -> subname}}" >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="file" name="image" id="img_box" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" >
                                </div>
                            </div>
                            <div class="img_preview_container">
                                <div class="preview_container">
                                    <img src="" class="preview_img" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                <button type="submit" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                <button type="button" id="cancel_btn" class="btn rounded-1 ">Cancel <i class="fas fa-ban"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                @endforeach
                <!-- end update form -->
                <!-- global content para -->
                    <div class="mt-3 content_para">
                        <p>
                            {{$abouts -> about}}
                        </p>
                    </div>
                
                <!-- end global content para -->
                <!-- start info detail list -->
                <ul class="list-unstyled">
                    <li>
                        <span>Name :</span> 
                        <span class="fw-semibold">{{$userdata->name}}</span>
                    </li>
                    <li>
                        <span>Email :</span> 
                        <span class="fw-semibold">
                        {{$userdata->email}}
                        </span>
                    </li>
                    <li>
                        <span>Phone :</span> 
                        <span class="fw-semibold">
                            @foreach($activePhones as $phone)
                                {{$phone -> name}}
                            @endforeach
                        </span>
                    </li>
                    <li>
                        <span>Address :</span> 
                        <span class="fw-semibold">{{$userdata->address}}</span>
                    </li>
                </ul>
                <!-- end info detail list    -->
                <hr>
                <!-- start btn container -->
                <div class="mt-3 d-flex flex-wrap justify-content-start align-items-center gap-2 ">
                    <a href="javascript:void(0)" class="nav-link btn rounded-1" data-bs-toggle="modal" data-bs-target="#editbox">Update <i class="fas fa-tools ms-2"></i></a>
                </div>
                <!-- end btn container   -->

                
                <!-- start model Area -->
                <div id="editbox" class="modal fade modal_box"  >
                    <div class="modal-dialog modal-md modal-dialog-center">
                        <div class="modal-content" style="">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Your About</h4>
                                <button type="type" class="btn btn-sm primary" data-bs-dismiss="modal">Close</button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('abouts.update',$abouts -> id)}}" method="POST" enctype="multipath/form-data">

                                    @csrf 
                                    @method("PUT")
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <div class="form-group">
                                                <textarea name="about" id="about" cols="30" rows="10" class="form-control rounded-0 shadow-none outline-none" placeholder="Enter Your About">{{$abouts -> about}}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                            <button type="submit" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                                            <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end model Area -->
            </div>
        </div>
    </div>

@endsection

@section("customscript")
    <script>
        let updateBtn = document.querySelector("#update_btn");
        // console.log(updateBtn);
        let getForm = document.querySelector(".update_form_container");
        let getCancel = document.querySelector("#cancel_btn")

        updateBtn.addEventListener('click',function(){
            getForm.classList.add("active");
        })

        getCancel.addEventListener("click",function(){
            getForm.classList.remove("active");

        })

        // start show preview img
        let getImgBox = document.querySelector("#img_box");
        let showPreviewImg = document.querySelector(".preview_img");

        getImgBox.addEventListener("change",function(e){
            document.querySelector(".img_preview_container").classList.add("active");
            var fileReader = new FileReader();
            
            fileReader.onload = function(e){
                showPreviewImg.setAttribute("src",e.target.result);
            }
            fileReader.readAsDataURL(this.files[0]);
        })
        // end show preview img
    </script>
@endsection




