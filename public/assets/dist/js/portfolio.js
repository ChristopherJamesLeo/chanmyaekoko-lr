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

// start copy right 
let getdate = new Date();
let getYear = getdate.getFullYear();
// console.log(getYear);
document.querySelector("#copyRightYear").innerText = getYear;
// end copy right

