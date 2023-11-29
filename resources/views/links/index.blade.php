@extends("layouts.pagesindex")

@section("content")
        <div class="row">
            <div class="mb-2 d-flex justify-content-start">
                <div class="w-100 edit_form" >
                    <form action="{{route('links.store')}}" method="post" enctype="multipart/form-data">

                        @csrf
                        @method("POST")
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="service_type" class="form-control form-control-md shadow-none outline-none" placeholder="Facebook / Viber / Telegram / Whatsapp / Youtube / Email" required >
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-group">
                                    <input type="text" name="link" class="form-control form-control-md shadow-none outline-none" placeholder="Enter App Link" required >
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3 ">
                                <button type="submit" class="btn rounded-1 ">Add <i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary reset_btn">Reset <i class="fas fa-sync"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table_container skill_table">
                <table class="w-100 border-1 ">
                    <thead>
                        <tr>
                            <th class="pb-2">No.</th>
                            <th class="pb-2">App</th>
                            <th class="pb-2">Link</th>
                            <th class="pb-2">Status</th>
                            <th class="pb-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($links as $idx => $link)
                            <tr class="">
                                <td>{{++$idx}}</td>
                                <td>{{$link->name}}</td>
                                <td>{{$link->link}}</td>
                                <td>{{$link->status->name}}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="javascript:void(0)" class="nav-link btn btn-sm rounded-0 edit_form_btn" 
                                            data-bs-toggle="modal" 
                                            data-id = "{{$link->id}}" 
                                            data-name = "{{$link->name}}" 
                                            data-status = "{{$link->status_id}}"  
                                            data-link = "{{$link->link}}" 
                                            data-bs-target="#editbox"><i class="fas fa-tools "></i>
                                        </a>

                                        <a href="javascript:void(0)" class="btn btn-sm secondary rounded-0 delete-btns" 
                                            data-id="{{$link->id}}" 
                                            data-name="{{$link->name}}" ><i class="fas fa-trash "
                                            ></i>
                                        </a>
                                    </div>

                                </td>
                                <form id="formdelete{{$link->id}}" action="{{route('links.destroy',$link->id)}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                </form>
                            </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
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
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="edit_name" class="form-control form-control-md shadow-none outline-none" placeholder="Add Service Type" required >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="link" id="edit_link" class="form-control form-control-md shadow-none outline-none" placeholder="Add Service Type" required >
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
            $(".delete-btns").click(function(){
                var getid = $(this).data("id");
                var getapp = $(this).data("name");

                if(confirm(`Are Your Sure!! You want to delete ${getapp}`)){
                    $("#formdelete"+getid).submit();
                }
            })

            $(".edit_form_btn").click(function(){
                let getId = $(this).data("id");
                let name = $(this).data("name");
                let status = $(this).data("status");
                let link = $(this).data("link");

                $("#edit_name").val(name);
                $("#edit_link").val(link);
                $("#edit_status_id").val(status);

                $("#edit_form_container").attr("action",`/links/${getId}`);
            })
        })
    </script>
@endsection


