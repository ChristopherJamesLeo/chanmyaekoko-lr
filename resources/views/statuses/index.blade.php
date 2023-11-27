@extends("layouts.pagesindex")

@section("content")
        <div class="row">
            <div class="table_container skill_table">
                <table class="w-100 border-1">
                    <thead>
                        <tr>
                            <th class="pb-2">No.</th>
                            <th class="pb-2">Status</th>
                            <th class="pb-2 text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($statuses as $idx => $status)
                            <tr class="">
                                <td>{{++$idx}}</td>
                                <td>{{$status->name}}</td>
                                <td>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="javascript:void(0)" class="nav-link btn btn-sm rounded-0 edit_form_btn" 
                                            data-bs-toggle="modal" 
                                            data-id = "{{$status->id}}" 
                                            data-name = "{{$status->name}}"
                                            data-bs-target="#editbox"><i class="fas fa-tools "></i>
                                        </a>

                                    </div>

                                </td>
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
                                    <input type="text" name="name" id="edit_name" class="form-control form-control-md shadow-none outline-none" placeholder="Status Type" required >
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
                let status = $(this).data("status");
                let link = $(this).data("link");

                $("#edit_name").val(name);
                $("#edit_link").val(link);
                $("#edit_status_id").val(status);

                $("#edit_form_container").attr("action",`/statuses/${getId}`);
            })
        })
    </script>
@endsection


