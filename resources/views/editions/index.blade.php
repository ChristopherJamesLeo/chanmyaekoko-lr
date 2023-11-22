@extends("layouts.pagesindex")

@section("content")
    <div class="row">
        @foreach($editions as $edition)


        <div class="col-lg-12 mb-2">
            <div class="content_container">
                <div class="p-1 p-md-3 p-lg-5 show_edition_container">
                    <video controls src="{{asset('assets/videos/'.$edition->name)}}" class="w-100"></video>
                </div>
                <!-- start btn container -->
                <div class="mt-3 d-flex flex-wrap justify-content-end align-items-center gap-2">
                    <a href="javascript:void(0)" id="update_btn" class="nav-link btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>
                    <!-- <a href="javascript:void(0)" id="update_btn" class="nav-link btn secondary rounded-1">Delete <i class="fas fa-trash ms-2"></i></a> -->
                </div>
                <!-- end btn container   -->
                <hr>
                <!-- start update form -->
                <div class="p-2 pt-4 update_form_container">
                    <form  action="{{route('editions.update',$edition->id)}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="file" name="name" id="img_box" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required >
                                </div>
                            </div>
                            <div class="img_preview_container">
                                <div class="preview_container" style="height: auto;">
                                    <video src="" controls class="preview_img" width="100%" alt="">
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

        @endforeach
        

    
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


