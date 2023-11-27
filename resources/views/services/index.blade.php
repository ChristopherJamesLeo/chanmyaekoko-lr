@extends("layouts.pagesindex")

@section("content")
    <div class="row">
        
        <div class="col-lg-12 mb-2">
            <div class="content_container">
                <!-- global content title -->
                <div class="mb-3 content_title">
                    <h3 class="text-start text-uppercase">Service</h3>
                    <span class="text-uppercase h5 sub_title">Whose given. Were gathered. There first subdue greater.</span>
                </div>
                <!-- end global contetn title -->
                <!-- start btn container -->
                <div class="mt-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <a href="javascript:void(0)" id="update_btn" class="nav-link btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>
                </div>
                <!-- end btn container   -->
                <!-- start update form -->
                <div class="p-2 pt-4 update_form_container">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Title" required >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required >
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
                <!-- end update form -->

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">

                <div class="mb-2 d-flex justify-content-start">
                    <div class="w-100 edit_form" >
                        <form action="{{route('services.store')}}" method="post" enctype="multipart/form-data">

                            @csrf
                            @method("POST")
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <div class="form-group">
                                        <input type="text" name="name" id="service_type" class="form-control form-control-md shadow-none outline-none" placeholder="Add Service Type" required >
                                    </div>
                                </div>
                                
                                
                                <div class="col-lg-12 mb-2">
                                    <div class="form-group">
                                        <input type="file" name="image" id="img_box" class="form-control form-control-md shadow-none outline-none" required >
                                    </div>
                                </div>
                                <div class="logo_view_container ">
                                    <div class="view_point">
                                        <img src="" width="100%" class="logo_view" alt="">
                                    </div>
                                </div>
                                
                                <div class=" flex-wrap justify-content-end align-items-center gap-3 update_btn_group">
                                    <button type="submit" class="btn rounded-1 ">Add <i class="fas fa-cloud-upload-alt"></i></button>
                                    <button type="reset"  class="btn rounded-1 secondary reset_btn">Reset <i class="fas fa-sync"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <hr>
            <div class="row gap-3">
                @foreach($services as $service)
                <div class="col-12">
                    <div class="p-3 rounded-1 card_content_container">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center content_title service_type ">
                                <div class="icon_container">
                                    <img src="{{ asset('assets/imgs/icons/' . $service->image) }}" width="40px" height="40px" class="me-3" alt="">
                                </div>
                                <span>{{$service->name}} <small class="badge rounded-pill bg-primary" style="font-size:10px">{{$service->status["name"]}}</small></span>
                            </div>
                            <!-- start btn container -->
                            <div class="mt-3 d-flex flex-wrap justify-content-end align-items-center gap-2">
                                <a href="javascript:void(0)" class="nav-link btn rounded-1 edit_form_btn" 
                                data-bs-toggle="modal" 
                                data-id = "{{$service->id}}" 
                                data-name = "{{$service->name}}" 
                                data-status = "{{$service->status_id}}"  
                                data-image = "{{$service->image}}" 
                                data-bs-target="#editbox">Update <i class="fas fa-tools ms-2"></i></a>

                                <a href="javascript:void(0)" class="btn secondary rounded-1 delete-btns" 
                                data-id="{{$service->id}}" 
                                data-service="{{$service->name}}" >Delete <i class="fas fa-trash ms-2"
                                ></i></a>
                            </div>
                            <!-- end btn container   -->
                            
                        </div>
                        
                    </div>
                    
                </div>
                <form id="formdelete{{$service->id}}" action="{{route('services.destroy',$service->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
                @endforeach
                
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
                        <div class="row">
                            <div class="mb-4 col-lg-12">
                                <div class="img_container">
                                    <img src="{{ asset('assets/imgs/icons/' . $service->image) }}" width="100px" height="100px" class="me-3" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="edit_name" class="form-control form-control-md shadow-none outline-none" placeholder="Add Service Type" required >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <select name="status_id" id="edit_status_id" class="form-control form-control-md shadow-none outline-none">
                                        @foreach($statuses as $statuse)
                                            <option value="{{$statuse -> id}}">{{$statuse->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
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
@endsection

@section("customscript")
    <script>
         $(document).ready(function(){
            $(".delete-btns").click(function(){
                var getid = $(this).data("id");
                var getservice = $(this).data("servicename");

                if(confirm(`Are Your Sure!! You want to delete ${getservice}`)){
                    $("#formdelete"+getid).submit();
                }
            })

            $(".edit_form_btn").click(function(){
                let getId = $(this).data("id");
                let name = $(this).data("name");
                let status = $(this).data("status");
                let image = $(this).data("image");

                $("#edit_name").val(name);
                $("#edit_status_id").val(status);

                $("#edit_form_container").attr("action",`/services/${getId}`);
            })
        })
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

        // show update btn group

        let getInput = document.querySelector("#service_type");
        let getBtnGroup = document.querySelector(".update_btn_group");
        
        getInput.addEventListener("change",function(){
            
            if(getInput.value){
                getBtnGroup.classList.add("active");
            }else{
                getBtnGroup.classList.remove("active");

            }
            
        })

        // start show preview img
        let getImgInput = document.querySelector("#img_box");
        let getViewImgCon = document.querySelector(".logo_view_container");
        let getViewImg = document.querySelector(".logo_view");


        preview(getImgInput,getViewImgCon,getViewImg);

        let getEditInput = document.querySelector("#edit_img_box");
        let getEditBoxCon = document.querySelector(".edit_view_container");
        let getPreviewImg = document.querySelector(".edit_show_img");


        preview(getEditInput,getEditBoxCon,getPreviewImg);

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

        document.querySelector(".reset_btn").addEventListener("click",function(){
            document.querySelector(".img_preview_container").classList.remove("active");
        })
        // end show preview img


    </script> 
@endsection


