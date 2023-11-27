@extends("layouts.pagesindex")

@section("content")


    <div class="row">
        @foreach($titles as $title)
        <div class="col-12">
            <div class="p-3 rounded-1 card_content_container">
                <div class="card_title">
                    <h3>{{$title->name}} </h3>
                    <small class="duration"><i>{{$title->updated_at->diffForHumans()}}</i></small>
                </div>
                
                <div class="card_decription">
                    <p>
                        {{$title->subname}}
                    </p>
                </div>
                @if(isset($title->image))
                    <div style="">
                        <img src="{{asset('assets/imgs/banners/'.$title->image)}}" width="150px" height="150px" style="object-fit:cover;" alt="">
                    </div>
                @endif
                
                <!-- start btn container -->
                <div class="mt-3 d-flex flex-wrap justify-content-end align-items-center gap-2">
                    <a href="#editbox" 
                    data-id = "{{$title->id}}"
                    data-name = "{{$title->name}}"
                    data-subname = "{{$title->subname}}"
                    data-bs-toggle = "modal"
                    data-image = "{{$title->image}}"
                    class="btn rounded-1 edit_form_btn">Update <i class="fas fa-tools ms-2"></i></a>
                </div>
                <!-- end btn container   -->
            </div>
            
        </div>
        @endforeach
    </div>        

    <!-- Model Area -->
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
                            <div class="col-md-4 col-sm-8 mb-2">
                                <div style="">
                                    <img src="{{asset('assets/imgs/banners/'.$title->image)}}" width="150px" height="150px" style="object-fit:cover;" alt="" id="showimg">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="edit_name" class="form-control form-control-md shadow-none outline-none" placeholder="Edit Title" required >
                                </div>
                            </div>
                            <div class="col-md-12 mb-2">
                                <div class="form-group">
                                    <textarea type="text" name="subname" id="edit_subname" class="form-control form-control-md shadow-none outline-none" placeholder="Edit Sub Title" required ></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="file" name="image" id="img_box" class="form-control form-control-md shadow-none outline-none"  >
                                </div>
                            </div>
                            <div class="logo_view_container ">
                                <div class="view_point">
                                    <img src="" width="100%" class="logo_view" alt="">
                                </div>
                            </div>
                            
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3 ">
                                <button type="submit" class="btn rounded-1">Update<i class="fas fa-cloud-upload-alt ms-2"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary">Reset <i class="fas fa-sync ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <!-- Model Area -->

@endsection

@section("customscript")
    <script>
        $(document).ready(function(){
            $(".edit_form_btn").click(function(){
                let getId = $(this).data("id");
                let name = $(this).data("name");
                let subname = $(this).data("subname");
                let image = $(this).data("image");

                $("#edit_name").val(name);
                $("#edit_subname").val(subname);
                if(image){
                    $("#showimg,#img_box").css({
                        "display" : "block",
                    });
                    $("#showimg").attr("src",`assets/imgs/banners/${image}`);
                }else{
                    $("#showimg,#img_box").css({
                        "display" : "none",
                    });
                }
                

                $("#edit_form_container").attr("action",`/titles/${getId}`);
            })
        })

        
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

    </script> 
@endsection


