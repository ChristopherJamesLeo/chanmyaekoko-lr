@extends("layouts.pagesindex")

@section("content")
<div class="row">
        
        <div class="col-lg-12 mb-2">
            <div class="content_container">
                <!-- global content title -->
                <div class="mb-3 content_title">
                    <h3 class="text-start text-uppercase">{{$profile -> name}}</h3>
                </div>
                <!-- end global contetn title -->

                <!-- start update form -->
                <div class="p-2 pt-4 edit_form">
                    <form  action="{{route('profiles.update',$profile->id)}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                        <div class="row">
                            <div class="col-lg-6 col-md-12  mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control form-control-md shadow-none outline-none" placeholder="First Name" required value="{{$profile -> name}}" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="firstname" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Last Name" required  value="{{$profile -> firstname}}" >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="email" name="email" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Enter Your Email" required  value="{{$profile -> email}}" >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="job" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Professional Job" required  value="{{$profile -> job}}" >
                                </div>
                            </div>
                            
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="address" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Enter Your Address" required  value="{{$profile -> address}}" >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label for="cvform">Enter Your Cv Form (PDF)</label>
                                    <input type="file" name="cv" id="cvform" class="form-control form-control-md shadow-none outline-none" >
                                </div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                <button type="submit" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                <a href="{{route('profiles.index')}}" class="btn rounded-1"><i class="fas fa-angle-left me-2"></i> Cancel </a>
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

@endsection


