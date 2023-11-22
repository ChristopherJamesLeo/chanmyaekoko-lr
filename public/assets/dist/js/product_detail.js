
// start jquery area 
$(document).ready(function(){
    // start nav bar active
    $(window).on("scroll",function(){
        let getScrollVal = $(this).scrollTop();
        // console.log(getScrollVal);
        if(getScrollVal > 300){
            $(".navbar").addClass("active");
        }else{
            $(".navbar").removeClass("active");
        }
    })
    // end nav bar active
})

// end jquery area

// start Show Img 
let getImgContainer = document.querySelector(".product_photo_container img");
let getImgs = document.querySelectorAll(".product_detail_img img");
// console.log(getImgContainer.src);
getImgs.forEach(function(getImg){
    getImg.addEventListener("click",function(){
        getImgContainer.src="";
        let getSrc = this.src;
        getImgContainer.src = " ";
        getImgContainer.src=`${getSrc}`;
    })
})
// end Show Img 


// start copy right 
let getdate = new Date();
let getYear = getdate.getFullYear();
// console.log(getYear);
document.querySelector("#copyRightYear").innerText = getYear;
// end copy right



