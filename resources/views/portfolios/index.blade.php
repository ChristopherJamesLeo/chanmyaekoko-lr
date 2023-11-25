@extends("layouts.pagesindex")

@section("content")
<div class="row">
        <div class="col-lg-12 mb-2">
            <div class="content_container">
                <!-- global content title -->
                <div class="mb-3 content_title">
                    <h3 class="text-start text-uppercase">SOCIAL AD SHOWCASE</h3>
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

                <hr>

                <!-- start collaborate content -->
                <div class="mb-2 text-end edit_layout_btn_container">
                    <button layout="grid_layout" class=" change_layout active"><i class="fas fa-th-large"></i></button>
                    <button layout="row_layout" class="change_layout"><i class="fas fa-th-list"></i></button>
                </div>
                <div class="mb-2 d-flex justify-content-start">
                    <a href="{{route('portfolios.create')}}" class="btn rounded-1 ">Add Portfolio</a>
                </div>
                <div class="row lay_out grid_layout">
                    @foreach($portfolios as $portfolio)
                        <div class="column_setting col-lg-3 col-md-4 col-sm-12 mb-4">
                            <div class="img_main_container">
                                <div class="img_container">
                                    <a href="{{route('portfolios.show',$portfolio->id)}}">
                                    <img src="{{asset('assets/imgs/logos/'.$portfolio->image)}}" alt="{{$portfolio->image}}">
                                    </a>
                                    
                                    <div class="text-center img_title">
                                        <a href="{{route('portfolios.show',$portfolio->id)}}" class="nav-link fw-semibold"><span>{{$portfolio->name}}<small class="ms-2 badge rounded-pill bg-primary" style="font-size:10px">{{$portfolio->status->name}}</small></span></a>
                                    </div>
                                </div>
                                <div class="p-2 d-flex justify-content-between gap-2 img_edit_btn_container ">
                                    <a href="{{route('portfolios.edit',$portfolio->id)}}" class="nav-link"><i class="fas fa-edit"></i></a>
                                    <a href="javascript:void(0)" 
                                    data-id = "{{$portfolio->id}}" 
                                    data-name = "{{$portfolio->name}}"
                                    class="nav-link delete_btns"><i class="fas fa-trash"></i></a>
                                </div>
                            </div>
                            <form action="{{route('portfolios.destroy',$portfolio->id)}}" id="deleteform{{$portfolio->id}}" method="POST">
                                @csrf 
                                @method("DELETE")
                            </form>
                        </div>
                    @endforeach
                    

                </div>
                <!-- end collaborate content -->

            </div>
        </div>

    </div>

@endsection

@section("customscript")
    <!-- start custom  js -->
    <script>

        $(document).ready(function(){
            $(".delete_btns").click(function(){
                let getId = $(this).data("id");
                let getName = $(this).data("name");

                if(window.confirm(`!! Are You Sure To Delete ${getName}`)){
                    $("#deleteform"+getId).submit();
                }
            })
        })

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

       
    </script>
    <!-- end custom  js -->
@endsection


