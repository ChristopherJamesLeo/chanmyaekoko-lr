@extends("layouts.pagesindex")
@section("libs")
    <link rel="stylesheet" href="{{asset('assets/libs/Magnific-Popup-master/dist/magnific-popup.css')}}">
@endsection
@section("style")
    <style>
        .slide_image_container {
            position : relative;
            overflow : hidden;
        }
        .slide_img_edit_btn_container {
            position: absolute;
            left : 0;
            bottom: 100%;

        }
        .slide_image_container:hover .slide_img_edit_btn_container {
            bottom:0px;
        }
    </style>
@endsection
@section("content")
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="content_container">

                <div class="row">
                    <div class="mb-3 product_title">
                        <h3 class="product_name">{{$portfolio->name}}</h3>
                        <span class="product_type">{{$portfolio->kind}}<small class="ms-2 badge rounded-pill bg-primary" style="font-size:10px">{{$portfolio->status->name}}</small></span>
                        <div>
                            <span>Product Type - {{$typename}}</span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{asset('assets/imgs/logos/'.$portfolio->image)}}" class="portfolio_view">
                            <img src="{{asset('assets/imgs/logos/'.$portfolio->image)}}" width="100%" alt="{{$portfolio->image}}">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            @foreach($images as $image)
                                <div class="slide_image_container col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <a href="{{asset('assets/imgs/products/'.$image->name)}}" class="portfolio_view">
                                        <img src="{{asset('assets/imgs/products/'.$image->name)}}" width="100%" alt="{{$image->name}}">
                                    </a>
                                    <div class="p-2 d-flex justify-content-between gap-2 slide_img_edit_btn_container w-100 ">
                                        <a href="#editbox" 
                                        data-bs-toggle="modal"
                                        data-image = "{{asset('assets/imgs/products/'.$image->name)}}"
                                        data-id = "{{$image->id}}"
                                        class="nav-link image_edit_btn"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" 
                                            data-id = "{{$image->id}}"
                                            class="nav-link image_delete_btns"><i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                    <form action="{{route('images.destroy',$image->id)}}" id="deleteImg{{$image->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf 
                                        @method("DELETE")
                                    </form>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3 product_description">
                            <h3>Description</h3>
                            <p>
                                {{$portfolio->description}}
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="p-1 p-md-3 p-lg-5 product_video">
                    @foreach($videos as $video)
                        <video controls src="{{asset('assets/videos/'.$video->name)}}" class="w-100"></video>
                        <div class="p-2 d-flex justify-content-between gap-2  w-100 ">
                            <a href="#editvideobox"
                            data-video = "{{asset('assets/videos/'.$video->name)}}"
                            data-id = "{{$video->id}}"
                            data-bs-toggle = "modal"
                            class="nav-link editvideobtn"><i class="fas fa-edit"></i></a>

                            <a href="javascript:void(0)" 
                                data-id = "{{$video->id}}" 
                                class="nav-link video_delete_btns"><i class="fas fa-trash"></i>
                            </a>

                        </div>
                        <form action="{{route('videos.destroy',$video->id)}}" id="deletevideo{{$video->id}}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            @method("DELETE")
                        </form>
                    @endforeach
                    
                   
                </div>
                <!-- start btn container -->
                <div class="mt-4 d-flex flex-wrap justify-content-end align-items-center gap-2">
                    <a href="{{route('portfolios.index')}}" id="" class="nav-link btn rounded-1">Back <i class="fas fa-angle-left ms-2"></i></a>

                    <a href="{{route('portfolios.edit',$portfolio->id)}}" id="update_btn" class="nav-link btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>

                    <a href="javascript:void(0)"
                    data-id = "{{$portfolio->id}}"
                    data-name = "{{$portfolio->name}}"
                    id="deleteBtn" class="nav-link btn rounded-1 secondary">Delete <i class="fas fa-trash ms-2"></i></a>
                </div>
                <form action="{{route('portfolios.destroy',$portfolio->id)}}" id="formdelete{{$portfolio->id}}" method="POST">
                    @csrf 
                    @method("DELETE")
                </form>
                <!-- end btn container   -->

            </div>
        </div>
    </div>

    <!-- start model Area -->
    <div id="editbox" class="modal fade modal_box"  >
        <div class="modal-dialog modal-md modal-dialog-center">
            <div class="modal-content" style="">
                <div class="modal-header">
                    <h4 class="modal-title">Edit</h4>
                    <button type="type" class="btn btn-sm primary" data-bs-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <form action="" id="edit_form_container" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                            <img src="" width="150px" height="150px" style="object-fit:cover;" class="show_img" alt="">

                            <div class="mt-3 col-lg-12 mb-2">
                                <div class="form-group mb-2">
                                    <input type="file" name="image" id="edit_img_box" class="form-control form-control-md shadow-none outline-none"  >
                                </div>
                            </div>
                            
                            <div class="mb-3 edit_view_container active">
                                <div class="preview_container" style="width:100px;height:100px">
                                    <img src="" class="preview_img edit_show_img" width="100%" height="100%" style="object-fit:cover" alt="">
                                </div>
                            </div>
                            
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3 ">
                                <button type="submit" class="btn rounded-1">Update<i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary">Reset <i class="fas fa-sync"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end model Area -->

        <!-- start model Area -->
        <div id="editvideobox" class="modal fade modal_box"  >
        <div class="modal-dialog modal-md modal-dialog-center">
            <div class="modal-content" style="">
                <div class="modal-header">
                    <h4 class="modal-title">Edit</h4>
                    <button type="type" class="btn btn-sm primary" data-bs-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <form action="" id="edit_video_form" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                            <video src="" width="200px" class="show_video" alt=""></video>

                            <div class="mt-3 col-lg-12 mb-2">
                                <div class="form-group mb-2">
                                    <input type="file" name="video" id="video_box" class="form-control form-control-md shadow-none outline-none"  >
                                </div>
                            </div>
                            
                            <div class="mb-3 edit_video_container active">
                                <div class="preview_container" style="width:100px;height:100px">
                                    <video src="" class="preview_img edit_show_video" width="200px"  alt=""></video>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3 ">
                                <button type="submit" class="btn rounded-1">Update<i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary">Reset <i class="fas fa-sync"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end model Area -->

@endsection

@section("customscript")
    <!-- magnific pop up css1 js1 -->
    <script src="{{asset('assets/libs/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            // start delete btn
            $("#deleteBtn").click(function(){
                let getid = $(this).data("id");
                let getname = $(this).data("name");
                if(window.confirm(`Are You Sure To Delete ${getname}` )){
                    $("#formdelete"+getid).submit();
                }
            })
            // end delete btn

            // start image update btn
            $(".image_edit_btn").click(function(){
                let getid = $(this).data("id");
                let getImage = $(this).data("image");
                $(".show_img").attr("src",`${getImage}`);
                $("#edit_form_container").attr("action",`/images/${getid}`)
            })
            // end  image update btn

            // start video update btn
            $(".editvideobtn").click(function(){
                let getid = $(this).data("id");
                let getVideo = $(this).data("video");
                $(".show_video").attr("src",`${getVideo}`);
                $("#edit_video_form").attr("action",`/videos/${getid}`)
            })
            // end  video update btn

            // start delete btn
            $(".video_delete_btns").click(function(){
                let getid = $(this).data("id");
                if(window.confirm(`Are You Sure To Delete This Video` )){
                    $("#deletevideo"+getid).submit();
                }
            })
            // end delete btn

            // start delete btn
            $(".image_delete_btns").click(function(){
                let getid = $(this).data("id");
                if(window.confirm(`Are You Sure To Delete This Image` )){
                    $("#deleteImg"+getid).submit();
                }
            })
            // end delete btn



            // start portfolio gallery
            $('.portfolio_view').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled:true
                },
            
                zoom: {
                  enabled: true,
                
                  duration: 300, 
                  easing: 'ease-in-out', 
                
                
                  opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                  }
                }
            
            });
            // end portfolio gallery

            
        })

        // show img preview
        let getEditInput = document.querySelector("#edit_img_box");
        let getEditBoxCon = document.querySelector(".edit_view_container");
        let getPreviewImg = document.querySelector(".edit_show_img");


        preview(getEditInput,getEditBoxCon,getPreviewImg);

        let getVideoBox = document.querySelector("#video_box");
        let getVideoCon = document.querySelector(".edit_video_container");
        let getShowVideo = document.querySelector(".edit_show_video");


        preview(getVideoBox,getVideoCon,getShowVideo);

        function preview(listener,viewcontainer,viewbox){
            listener.addEventListener("change",function(e){
                viewcontainer.classList.add("active");
                var fileReader = new FileReader();
                fileReader.onload = function(e){
                    viewbox.setAttribute("src",e.target.result);
                }
                fileReader.readAsDataURL(this.files[0]);
            })
        }
        // end img preview 
    </script>
@endsection


