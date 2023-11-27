@extends("layouts.pagesindex")

@section("content")
    <div class="row">
        <div class="col-lg-12 mb-2">
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
                    <form action="{{route('titles.update',$title->id)}}" method="post" enctype="multipart/form-data">
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
                                    <input type="text" name="subname" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required value="{{$title -> subname}}">
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
                @endforeach

            </div>
        </div>
        <hr>
        <div class="row">
            <hr>
                <!-- start collaborate content -->
                
                <div class="mb-2 d-flex justify-content-start">
                    <div class="col-12">
                        <div class="mb-2 d-flex justify-content-start">
                            <div class="w-100 edit_form" >
                                <form action="{{route('collaborates.store')}}" method="post" enctype="multipart/form-data">

                                    @csrf
                                    @method("POST")
                                    <div class="row">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control form-control-md shadow-none outline-none" placeholder="Add Collaborator" required >
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
                </div>
                <div class="mb-2 text-end edit_layout_btn_container">
                    <button layout="grid_layout" class=" change_layout active"><i class="fas fa-th-large"></i></button>
                    <button layout="row_layout" class="change_layout"><i class="fas fa-th-list"></i></button>
                </div>
                <div class="row lay_out grid_layout">
                    @foreach($collaborates as $collaborter )
                    <div class="column_setting col-lg-3 col-md-4 col-sm-12 mb-4">
                        <div class="img_main_container">
                            <div class="img_container">
                                <img src="{{asset('assets/imgs/gallery/'.$collaborter->image)}}" alt="{{$collaborter->image}}">
                                <div class="text-center img_title">
                                    <span class="fw-semibold">{{$collaborter -> name}}<small class="ms-2 badge rounded-pill bg-primary" style="font-size:10px">{{$collaborter->status["name"]}}</small></span>
                                </div>
                            </div>
                            <div class="p-2 d-flex justify-content-between gap-2 img_edit_btn_container ">
                                <a href="{{route('collaborates.edit',$collaborter->id)}}" class="nav-link"><i class="fas fa-edit"></i></a>
                                <a href="javascript:void(0)" 
                                data-id="{{$collaborter->id}}"
                                data-name ="{{$collaborter->name}}" 
                                class="nav-link delete_btns"><i class="fas fa-trash"></i></a>
                            </div>
                        </div>
                        <form action="{{route('collaborates.destroy',$collaborter->id)}}" id="formdelete{{$collaborter->id}}" method="POST">
                            @csrf 
                            @method("DELETE")
                        </form>
                    </div>
                    
                    @endforeach
                </div>
                <!-- end collaborate content -->
            
        </div>
    
    </div>

@endsection

@section("customscript")
    <script>
         $(document).ready(function(){
            $(".delete_btns").click(function(){
                var getid = $(this).data("id");
                var getname = $(this).data("name");

                if(confirm(`Are Your Sure!! You want to delete ${getname}`)){
                    $("#formdelete"+getid).submit();
                }
            })
        })
        let updateBtn = document.querySelector("#update_btn");
        let getForm = document.querySelector(".update_form_container");
        let getCancel = document.querySelector("#cancel_btn")

        updateBtn.addEventListener('click',function(){
            getForm.classList.add("active");
        })

        getCancel.addEventListener("click",function(){
            getForm.classList.remove("active");

        })

        // show update btn group

        let getInput = document.querySelector("#name");
        let getBtnGroup = document.querySelector(".update_btn_group");
        
        getInput.addEventListener("change",function(){
            
            if(getInput.value){
                getBtnGroup.classList.add("active");
            }else{
                getBtnGroup.classList.remove("active");

            }
            
        })

        document.querySelector(".reset_btn").addEventListener("click",function(){
            document.querySelector(".logo_view_container").classList.remove("active");
        })

        // start show preview img
        let getImgInput = document.querySelector("#img_box");
        let getViewImgCon = document.querySelector(".logo_view_container");
        let getViewImg = document.querySelector(".logo_view");


        preview(getImgInput,getViewImgCon,getViewImg);


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

        
        // end show preview img

        // start change layout
        let getLayoutBtns = document.querySelectorAll(".change_layout");
        let getLayoutContainer = document.querySelector(".lay_out");
        let getColumnSettings = document.querySelectorAll(".column_setting");

        getLayoutBtns.forEach(function(getLayoutBtn){

            getLayoutBtn.addEventListener("click",function(){
                getLayoutBtns.forEach(function(getLayoutBtn){
                    getLayoutBtn.classList.remove("active");
                })
                this.classList.add("active");
                // console.log(this.getAttribute("layout"));
                let layout = this.getAttribute("layout");
                // console.log(getLayoutContainer.className);
                getLayoutContainer.className = `row lay_out ${layout}`;
                if(layout === "grid_layout"){
                    getColumnSettings.forEach(function(getColumnSetting){
                        getColumnSetting.className = `column_setting col-lg-3 col-md-4 col-sm-12 mb-4`;
                    })
                    
                }else if(layout === "row_layout") {
                    getColumnSettings.forEach(function(getColumnSetting){
                        getColumnSetting.className = `column_setting col-12`;
                    })
                    
                }

                // console.log(getColumnSetting.className);
            })
        })
        // end change layout
    </script> 
@endsection


