@extends("layouts.pagesindex")

@section("content")
<div class="row">
        <h3 style="font-size: 25px;">Dashboard</h3>
        <hr>
        <div class="col-lg-12 mb-2">
            <div class="content_container profile_main_container">  
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-12">
                        <div class="mb-4 p-3 border  profile_contact_link">
                            <h3>Links</h3>
                            <ul class="list-unstyled profile_links">
                                <!-- <li class="py-1 d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex justify-content-start align-items-center gap-1 links_title">
                                        <i class="fas fa-globe me-2"></i>
                                        
                                    </div>
                                    <a href="#" class="nav-link">www.chanmyaekoko.com</a>
                                </li> -->
                                @foreach($activeLinks as $activeLink)
                                <li class="py-1 text-end">
                                    <a href="#" class="nav-link">{{$activeLink -> name}}</a>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <div class="mb-4 p-3 border  profile_contact_link">
                            <h3>Education</h3>
                            <!-- start eductaion content -->
                            <ul class="list-unstyled eductaion_list_group">
                                @foreach($activeEducations as $activeEducation)
                                <li class="mb-2 education_list_items text-start">
                                    <h3 class="m-0 text-capitalize">{{$activeEducation->institude}}</h3>
                                    <span class="text-capitalize">{{$activeEducation->degree}}</span>
                                </li>
                                @endforeach

                            </ul>
                            <!-- end education content -->
                        </div>

                        
                        <div class="mb-4 py-4 px-3 border rounded-1 skills">
                            <h3>collaborator</h3>
                            <ul class="list-unstyled professional_jobs_infos">
                                @foreach($activeCollaboraters as $activeCollaborater)
                                <li class="py-1">
                                    <span>{{$activeCollaborater->name}}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mb-4 py-4 px-3 border rounded-1 skills">
                            <h3>Products</h3>
                            <ul class="list-unstyled professional_jobs_infos">
                                @foreach($activeProducts as $activeProduct)
                                <li class="py-1">
                                    <span>{{$activeProduct->name}}</span>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="mb-4 py-4 px-3 border rounded-1 profile_info_container">
                            <h3>About</h3>
                            <ul class="list-unstyled profile_infos">
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Full Name</span>
                                        </div>
                                        <div class="col-9">
                                            <span>{{$userdata->name}}</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Email</span>
                                        </div>
                                        <div class="col-9">
                                            <span>{{$userdata->email}}</span>
                                        </div>
                                    </div>
                                </li>
                                @foreach($activePhones as $phone)
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Phone</span>
                                        </div>
                                        <div class="col-9">
                                            <span>{{$phone -> name}} </span>
                                        </div>
                                    </div>
                                </li>
                                @endforeach 
                                <li class="py-1">
                                    <div class="row align-items-center">
                                        <div class="col-3">
                                            <span class="fw-medium">Address</span>
                                        </div>
                                        <div class="col-9">
                                            <span>{{$userdata->address}}</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="mb-4 py-4 px-3 border rounded-1 professional_jobs">
                                    <h3>Services</h3>
                                    <ul class="list-unstyled professional_jobs_infos">
                                        @foreach($activeServices as $activeService)
                                        <li class="py-1">
                                            <span>{{$activeService->name}}</span>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="mb-4 py-4 px-3 border rounded-1 skills">
                                    <h3>Skills</h3>
                                    <ul class="list-unstyled professional_jobs_infos">
                                        @foreach($activeSkills as $activeSkill)
                                        <li class="py-1">
                                            <span>{{$activeSkill->subject}}</span>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 py-4 px-3 border rounded-1 profile_info_container">
                            <h3>Experience</h3>
                            <ul class="list-unstyled profile_infos">
                                @foreach($activeExperiences as $activeExperience)
                                <li class="py-1">
                                    <div class="p-3 rounded-1 card_content_container">
                                        <div class="card_title">
                                            <h3>{{$activeExperience -> company}}</h3>
                                            <!-- <span class="d-block">Office Computer Staff</span> -->
                                            <small class="duration"><i>{{$activeExperience -> duration}} months</i></small>
                                        </div>
                                        <div class="card_decription">
                                            <p>
                                                {{$activeExperience -> position}} 
                                            </p>
                                        </div>

                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                        

                    </div>
                </div>
                    


            </div>
        </div>

    </div>
@endsection
