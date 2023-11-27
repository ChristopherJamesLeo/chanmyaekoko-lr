@extends("layouts.pagesindex")

@section("libs")
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection 

@section("content")
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="content_container">
                <!-- global content title -->
                <div class="mb-3 content_title">
                    <div class="row">
                        <h3>Add - Product</h3>
                        
                    </div>
                    
                </div>
                <!-- end global contetn title -->

                <!-- start update form -->
                <div class="p-2 pt-4 edit_form">
                    <form  action="{{route('portfolios.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf 
                        @method("POST")
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Company Name" required value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="kind" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Company Type" required  value="{{old('kind')}}">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <select name="type[]" id="select_type" class="form-control form-control-md shadow-none outline-none" multiple data-placeholder="Select Product Type" required>
                                        @foreach($types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <textarea name="description" id="" cols="30" rows="5" class="form-control shadow-none outline-none" placeholder="Description"  value="{{old('description')}}"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label for="img_box">Company Logo</label>
                                    <input type="file" name="logo" id="img_box" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required >
                                </div>
                            </div>
                            <div class="logo_view_container ">
                                <div class="view_point">
                                    <img src="" width="100%" class="logo_view" alt="">
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label for="imges">Images</label>
                                    <input type="file" name="images[]" id="prev_imges" class="form-control form-control-md shadow-none outline-none" multiple >
                                </div>
                            </div>
                            <div class="imges_view_container ">
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label for="preview_video">Video</label>
                                    <input type="file" name="video" id="preview_video" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title"  >
                                </div>
                            </div>
                            <div class="video_view_container">
                                <div class="view_point" style="height: auto;">
                                    <video src="" controls class="preview_video" width="100%" alt="">
                                </div>
                            </div>
                            
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                <button type="submit" class="btn rounded-1 ">Add <i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                <a href="{{route('portfolios.index')}}" class="btn rounded-1"><i class="fas fa-angle-left me-2"></i> Cancel </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end update form -->
            </div>
        </div>
    </div>

@endsection

@section("customscript")
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#select_type").select2({
                tags: true,
                placeholder: "Select an option"
            });
        })
        // start show preview img
        let getLogoInput = document.querySelector("#img_box");
        let getLogoBoxCon = document.querySelector(".logo_view_container");
        let getViewLogo = document.querySelector(".logo_view");


        preview(getLogoInput,getLogoBoxCon,getViewLogo);

        let getVideoInput = document.querySelector("#preview_video");
        let getVideoBoxCon = document.querySelector(".video_view_container");
        let getVideo = document.querySelector(".preview_video");

        preview(getVideoInput,getVideoBoxCon,getVideo);

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

        // start show multi img preview
        let getImgsInput = document.querySelector("#prev_imges");
        let getImgsContainer = document.querySelector(".imges_view_container");

        getImgsInput.addEventListener("change",function(){
            // console.log(this.files.length);
            let getTotalFile = this.files.length;
            if(getTotalFile > 0){
                getImgsContainer.classList.add("active");
            }else{
                getImgsContainer.classList.remove("active");
            }
            
            for(let i = 0 ; i < getTotalFile ; i++){
                var fileReader = new FileReader();
                fileReader.onload = function(e){
                    let showImgs =  `<div class="view_point">
                        <img src="${e.target.result}" width="100%"  class="preview_img" alt="">
                    </div>`;
                    getImgsContainer.innerHTML += showImgs;
                    
                }

                fileReader.readAsDataURL(this.files[i]);
            }
        })
        // end show multi img preview


    </script>
@endsection


