@extends("layouts.pagesindex")

@section("content")
    <div class="row">
        
        <div class="col-lg-12 mb-2">
            <div class="content_container">
                <!-- global content title -->
                <div class="mb-3 content_title">
                    <h3 class="text-start text-uppercase">Edit-{{$education -> institude}}</h3>
                    
                </div>
                <!-- end global contetn title -->

                <!-- start update form -->
                <div class="p-2 pt-4 edit_form">
                    <form action="{{route('educations.update',$education->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="institude" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Institute" value="{{$education -> institude}}" required >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="degree" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Degree" value="{{$education -> degree}}" required >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <select name="status_id" id="" class="form-control form-control-md shadow-none outline-none">
                                        @foreach($statuses as $statuse)
                                            <option value="{{$statuse -> id}}"
                                                @if($statuse["id"] === $education -> status_id)
                                                    selected
                                                @endif
                                            >{{$statuse->name}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <textarea name="subject" id="" cols="30" rows="5" class="form-control shadow-none outline-none" placeholder="Subject">{{$education -> subject}}</textarea>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                <button type="submit" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                <a href="{{route('educations.index')}}" class="btn rounded-1"><i class="fas fa-angle-left me-2"></i> Cancel </a>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end update form -->
            </div>
        </div>
    </div>
    
@endsection