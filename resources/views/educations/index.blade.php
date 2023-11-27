@extends("layouts.pagesindex")

@section("content")
    <div class="row">
        
        <div class="col-lg-6 col-md-12 mb-2">
            <div class="content_container">
                <!-- global content title -->
                <div class="mb-3 content_title">
                    @foreach($titles as $title)
                    <h3 class="text-start text-uppercase">{{$title -> name}}</h3>
                    <span class="text-uppercase h5 sub_title">{{$title -> subname}}</span>
                    @endforeach
                </div>
                <!-- end global contetn title -->
                
                <!-- start eductaion content -->
                <ul class="list-unstyled eductaion_list_group">
                    @foreach($educations as $idx => $education)
                        <li class="mb-2 education_list_items text-start">
                            <h3 class="m-0 text-capitalize">{{$education -> institude}}</h3>
                            <span class="text-capitalize">{{$education -> degree}}</span>
                        </li>
                    @endforeach
                    
                </ul>
                <!-- end education content -->
                <hr>
                <!-- start btn container -->
                <div class="mt-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <a href="javascript:void(0)" id="update_btn" class="nav-link btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>
                    
                </div>
                <!-- end btn container   -->
                <!-- start update form -->
                @foreach($titles as $title)
                <div class="p-2 pt-4 update_form_container">
                    <form action="{{route('titles.update',$title->id)}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Title" required value="{{$title->name}}" >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="subname" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required  value="{{$title->subname}}">
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
            </div>
        </div>
        <div class="col-lg-6 col-md-12 mb-2">
            <div class="content_img_container">
                @foreach($titles as $title)
                <div class="rounded-2 content_img " style="background-image: url({{asset('assets/imgs/banners/'.$title->image)}});"></div>
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="mb-2 d-flex justify-content-start">
            <a href="educations/create" class="btn rounded-1 ">Add Education</a>
        </div>
        <div class="table_container">
            <table class="w-100 border-1 ">
                <thead>
                    <tr>
                        <th class="pb-2">No.</th>
                        <th class="pb-2">Institute</th>
                        <th class="pb-2">Degree</th>
                        <th class="pb-2">Subject</th>
                        <th class="pb-2">Status</th>
                        <th class="pb-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educations as $idx => $education)
                        <tr class="">
                            <td>{{++$idx}}</td>
                            <td>{{$education->institude}}</td>
                            <td>{{$education->degree}}</td>
                            <td>{{$education->subject}}</td>
                            <td>{{$education->status->name}}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{route('educations.edit',$education->id)}}" class="btn btn-sm rounded-0"><i class="fas fa-edit"></i></a>
                                    <a href="javascript:void(0)" data-institude="{{$education->institude}}" data-idx = "{{$education->id}}" class="btn btn-sm secondary rounded-0 delete-btns"><i class="fas fa-trash"></i></a>
                                </div>

                            </td>
                        </tr>
                        <form id="formdelete{{$education->id}}" action="{{route('educations.destroy',$education->id)}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    @endforeach

                    
                    

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section("customscript")
    <script>

        $(document).ready(function(){
            $(".delete-btns").click(function(){
                // console.log("hello");
                var getidx = $(this).data("idx");
                var getinstitude = $(this).data("institude");

                // console.log(getidx);

                if(confirm(`Are Your Sure!! You want to delete ${getinstitude}`)){
                    $("#formdelete"+getidx).submit();
                }else{

                }
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




