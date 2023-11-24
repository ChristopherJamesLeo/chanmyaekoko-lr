@extends("layouts.pagesindex")

@section("content")
    <div class="row">
        
        <div class="col-lg-12 mb-2">
            <div class="content_container">

                <div class="row">
                    <div class="mb-3 product_title">
                        <h3 class="product_name">Bo Mobile</h3>
                        <span class="product_type">Phone Service & Accessories Shop</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="./../../assets/imgs/gallery/bo.jpg" class="portfolio_view">
                            <img src="./../../assets/imgs/gallery/bo.jpg" width="100%" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <a href="./../../assets/imgs/gallery/bo_bag.jpg" class="portfolio_view">
                                    <img src="./../../assets/imgs/gallery/bo_bag.jpg" width="100%" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <a href="./../../assets/imgs/gallery/bo_bus_card.jpg" class="portfolio_view">
                                    <img src="./../../assets/imgs/gallery/bo_bus_card.jpg" width="100%" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <a href="./../../assets/imgs/gallery/bo_card.jpg" class="portfolio_view">
                                    <img src="./../../assets/imgs/gallery/bo_card.jpg" width="100%" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <a href="./../../assets/imgs/gallery/bo_fb.jpg" class="portfolio_view">
                                    <img src="./../../assets/imgs/gallery/bo_fb.jpg" width="100%" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <a href="./../../assets/imgs/gallery/bo_poster.jpg" class="portfolio_view">
                                    <img src="./../../assets/imgs/gallery/bo_poster.jpg" width="100%" alt="">
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <a href="./../../assets/imgs/gallery/bo_voucher.jpg" class="portfolio_view">
                                    <img src="./../../assets/imgs/gallery/bo_voucher.jpg" width="100%" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="mt-3 product_description">
                            <h3>Description</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates incidunt repudiandae voluptatum officia temporibus asperiores animi voluptas. Repudiandae quod soluta perspiciatis ab ea itaque modi, repellendus, temporibus dignissimos nostrum voluptates.
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="p-1 p-md-3 p-lg-5 product_video">
                    <video controls src="" class="w-100"></video>
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


