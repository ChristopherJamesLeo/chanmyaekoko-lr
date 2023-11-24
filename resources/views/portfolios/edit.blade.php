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
                        <h3>Aung Myint Mo</h3>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <img src="./../../assets/imgs/gallery/aungmyintmo.png" width="100%"  alt="">
                        </div>
                    </div>
                    
                    
                </div>
                <!-- end global contetn title -->

                <!-- start update form -->
                <div class="p-2 pt-4 edit_form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Company Name" required >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Company Type" required >
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="5" class="form-control shadow-none outline-none" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label for="img_box">Company Logo</label>
                                    <input type="file" name="" id="img_box" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required >
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
                                    <input type="file" name="[]" id="prev_imges" class="form-control form-control-md shadow-none outline-none" multiple >
                                </div>
                            </div>
                            <div class="imges_view_container ">
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <label for="preview_video">Video</label>
                                    <input type="file" name="" id="preview_video" class="form-control form-control-md shadow-none outline-none" placeholder="Sub Title" required >
                                </div>
                            </div>
                            <div class="video_view_container">
                                <div class="view_point" style="height: auto;">
                                    <video src="" controls class="preview_video" width="100%" alt="">
                                </div>
                            </div>
                            
                            <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                <button type="submit" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                                <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                <a href="./../pages/collaborate.html" class="btn rounded-1"><i class="fas fa-angle-left me-2"></i> Cancel </a>
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
    <script>
            // start portfolio gallery
            $('.portfolio_view').magnificPopup({
                type: 'image',
                mainClass: 'mfp-with-zoom',
                gallery: {
                    enabled:true
                },
            
                zoom: {
                  enabled: true,
                
                  duration: 300, 
                  easing: 'ease-in-out', 
                
                
                  opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                  }
                }
            
            });
            // end portfolio gallery
    </script>
@endsection


