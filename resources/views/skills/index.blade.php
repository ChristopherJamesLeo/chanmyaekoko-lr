@extends("layouts.pagesindex")

@section("content")
<div class="row">
        
        <div class="col-lg-12 mb-2">
            <div class="content_container">
                <!-- global content title -->
                <div class="mb-3 content_title">
                    <h3 class="text-start text-uppercase">Skill</h3>
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
            <div class="mb-2 d-flex justify-content-start">
                <a href="{{route('skills.create')}}" class="btn rounded-1 ">Add Skill</a>
            </div>
            <div class="table_container skill_table">
                <table class="w-100 border-1 ">
                    <thead>
                        <tr>
                            <th class="pb-2">No.</th>
                            <th class="pb-2">Subject</th>
                            <th class="pb-2">Type</th>
                            <th class="pb-2">Level</th>
                            <th class="pb-2">Status</th>
                            <th class="pb-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skills as $idx => $skill)
                            <tr class="">
                                <td>{{++$idx}}</td>
                                <td>{{$skill->subject}}</td>
                                <td>{{$skill->type}}</td>
                                <td>{{$skill->level}}%</td>
                                <td>{{$skill->status->name}}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{route('skills.edit',$skill->id)}}" class="btn btn-sm rounded-0"><i class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" data-type="{{$skill->type}}" data-idx = "{{$skill->id}}" class="btn btn-sm secondary rounded-0 delete-btns"><i class="fas fa-trash"></i></a>
                                    </div>

                                </td>

                            </tr>
                            <form id="formdelete{{$skill->id}}" action="{{route('skills.destroy',$skill->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        @endforeach
                        
                    </tbody>
                </table>
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


