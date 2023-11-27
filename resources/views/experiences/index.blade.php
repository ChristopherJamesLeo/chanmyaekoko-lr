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
            <div class="mb-2 d-flex justify-content-start">
                <a href="{{route('experiences.create')}}" class="btn rounded-1 ">Add Experience</a>
            </div>
            <div class="row gap-3">
                @foreach($experiences as $experience)
                <div class="col-12">
                    <div class="p-3 rounded-1 card_content_container">
                        <div class="card_title">
                            <h3>{{$experience->company}}<small class="ms badge rounded-pill bg-primary" style="font-size:10px">{{$experience->status['name']}}</small> </h3>
                            <span class="d-block">{{$experience->position}}</span>
                            <small class="duration"><i>{{$experience->duration}} months</i></small>
                        </div>
                        <div class="card_decription">
                            <p>
                                {{$experience->description}}
                            </p>
                        </div>
                        <!-- start btn container -->
                        <div class="mt-3 d-flex flex-wrap justify-content-end align-items-center gap-2">
                            <a href="{{route('experiences.edit',$experience->id)}}" class="btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>
                            <a href="javascript:void(0)" data-type="{{$experience->type}}" data-idx = "{{$experience->id}}" class="btn secondary delete-btns">Delete<i class="fas fa-trash"></i></a>
                        </div>
                        <!-- end btn container   -->
                    </div>
                    
                </div>
                <form id="formdelete{{$experience->id}}" action="{{route('experiences.destroy',$experience->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
                @endforeach
            </div>
            
        </div>
    
    </div>
@endsection

@section("customscript")
    <script>
         $(document).ready(function(){
            $(".delete-btns").click(function(){
                // console.log("hello");
                var getidx = $(this).data("idx");
                var gettype = $(this).data("type");

                if(confirm(`Are Your Sure!! You want to delete ${gettype}`)){
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

    </script> 
@endsection


