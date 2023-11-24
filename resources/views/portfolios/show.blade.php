@extends("layouts.pagesindex")
@section("libs")
    <link rel="stylesheet" href="{{asset('assets/libs/Magnific-Popup-master/dist/magnific-popup.css')}}">
@endsection
@section("content")
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="content_container">

                <div class="row">
                    <div class="mb-3 product_title">
                        <h3 class="product_name">{{$portfolio->name}}</h3>
                        <span class="product_type">{{$portfolio->kind}}<small class="ms-2 badge rounded-pill bg-primary" style="font-size:10px">{{$portfolio->status->name}}</small></span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="{{asset('assets/imgs/logos/'.$portfolio->image)}}" class="portfolio_view">
                            <img src="{{asset('assets/imgs/logos/'.$portfolio->image)}}" width="100%" alt="{{$portfolio->image}}">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            @foreach($images as $image)
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                    <a href="{{asset('assets/imgs/products/'.$image->name)}}" class="portfolio_view">
                                        <img src="{{asset('assets/imgs/products/'.$image->name)}}" width="100%" alt="{{$image->name}}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-3 product_description">
                            <h3>Description</h3>
                            <p>
                                {{$portfolio->description}}
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="p-1 p-md-3 p-lg-5 product_video">
                    @foreach($videos as $video)
                        <video controls src="{{asset('assets/videos/'.$video->name)}}" class="w-100"></video>
                    @endforeach
                   
                </div>
                <!-- start btn container -->
                <div class="mt-4 d-flex flex-wrap justify-content-end align-items-center gap-2">
                    <a href="./../editpages/portfolioedit.html" id="update_btn" class="nav-link btn rounded-1">Update <i class="fas fa-tools ms-2"></i></a>
                    <a href="#" id="update_btn" class="nav-link btn rounded-1 secondary">Delete <i class="fas fa-trash ms-2"></i></a>
                </div>
                <!-- end btn container   -->

            </div>
        </div>
        

    
    </div>

@endsection

@section("customscript")
    <!-- magnific pop up css1 js1 -->
    <script src="{{asset('assets/libs/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
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


