@extends("layouts.pagesindex")

@section("content")
    <div class="row">
        <div class="col-lg-12 mb-2">
            <div class="content_container log_in_content_container">
                <div class="log_in_form_container">
                    <form  action="{{route('logins.update',$userdata->id)}}" id="updateform" method="post" enctype="multipart/form-data">
                        @csrf 
                        @method("PUT")
                        <div class="row">
                            <h3 class="text-center" style="font-size: 20px;">Log In</h3>
                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="text" name="name" id="" class="form-control form-control-md shadow-none outline-none" placeholder="User Name" value="{{$userdata -> name}}" disabled readonly >
                                    <span><i class="fas fa-user"></i></span>
                                </div>
                            </div>

                            <div class="col-lg-12 mb-2">
                                <div class="form-group">
                                    <input type="email" name="email" id="" class="form-control form-control-md shadow-none outline-none" placeholder="Enter Your Email" value="{{$userdata -> email}}" required >
                                    <span><i class="fas fa-envelope"></i></span>
                                </div>
                            </div>
                            <div class="flex-wrap justify-content-end align-items-center gap-3 update_login">
                                <button type="button" id="update_login_btn" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                            </div>
                            <div class="enter_password">
                                <div class="col-lg-12 mb-2">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" class="form-control form-control-md shadow-none outline-none" placeholder="Enter Your Password"  required >
                                        <span><i class="fas fa-lock-open"></i></span>
                                        <label for="showpassword">
                                            <span class="show_password"><i class="fas fa-eye"></i></span>
                                        </label>
                                        <input type="checkbox" name="" id="showpassword">
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-2">
                                    <div class="form-group">
                                        <input type="password" name="conpassword" id="con_password" class="form-control form-control-md shadow-none outline-none" placeholder="Confirm New Password"  required >
                                        <span><i class="fas fa-lock"></i></span>
                                    </div>
                                </div>
                                <div class="d-flex flex-wrap justify-content-end align-items-center gap-3">
                                    <button type="button" id="submit_btn" class="btn rounded-1 ">Update <i class="fas fa-cloud-upload-alt"></i></button>
                                    <button type="reset"  class="btn rounded-1 secondary ">Reset <i class="fas fa-sync"></i></button>
                                    <button type="button" id="cancel_btn" class="btn rounded-1 ">Cancel <i class="fas fa-ban"></i></button>
                                </div>
                            </div>
                            
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section("customscript")
    <script>
        document.querySelector("#update_login_btn").addEventListener("click",function(){
            document.querySelector(".update_login").classList.add("active");
            document.querySelector(".enter_password").classList.add("active");
        })

        document.querySelector("#cancel_btn").addEventListener("click",function(){
            document.querySelector(".update_login").classList.remove("active");
            document.querySelector(".enter_password").classList.remove("active");

        })

        let geteyebtn = document.querySelector(".log_in_form_container form .form-group label");
        let getInput = document.querySelector("#password");
        let getcheckbox = document.querySelector("#showpassword");
        let getconfirmbox = document.querySelector("#con_password");

        geteyebtn.addEventListener("click",function(){
            this.classList.toggle("active");
            if(getcheckbox.checked){
                getInput.setAttribute("type" , "password");
            }else{
                getInput.setAttribute("type" , "text");
            }
        })

        document.querySelector("#submit_btn").addEventListener("click",function(){
            let getpass = getInput.value;
            let getconpass = getconfirmbox.value;

            // console.log(getpass ,getconpass);

            if(getpass === getconpass){
                document.querySelector("#updateform").submit();
            }else{
                window.alert("Password Does Not Match !! Please Try Again");
            }
        })




    </script>
@endsection


