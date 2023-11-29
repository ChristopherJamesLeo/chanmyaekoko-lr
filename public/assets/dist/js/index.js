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

    // start skill section
    let tilt = $('.hover_ef').tilt({
        maxTilt: 60,
        scale: 1.2,
        speed: 900,
    });
    // end skill section

    tilt = $('.service_tilt').tilt({
        maxTilt: 20,
        scale: 1.01,
        speed: 900,
    });

    // start collaborate section
    $("#colla_carousel").owlCarousel({
        items: 5,
        loop : true,
        nav : false,
        dots : false,
        responsive:{
            0:{
                items:2,
            },
            500:{
                items:3,
            },
            768:{
                items:4,
            },
            1000:{
                items:5,
            }
        }
    })
    // end collaborate section

    // start portfolio gallery
    $('.gallery_pop').magnificPopup({
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
    
})
// end jquery are

// video play
// let getVideo = document.querySelector(".intro_video");


// let videoTimer = document.querySelector(".video_timer span");

// let videoInt;
// let int = 33;
// getVideo.addEventListener("play",function(){
//     // console.log("video is playing");
//     clearInterval(videoInt);
//     videoInt = setInterval(function(){
//     int -= 1;
//     // console.log(int);
//     videoTimer.innerHTML = "";
//     videoTimer.textContent = int;
//         if(int == 0){
//             clearInterval(videoInt);
//             getVideo.pause();
//             if(getVideo.paused){
//                 document.querySelector(".video_over_layer").classList.add("active");
//             }
//         }
//     },1000);
// })
// getVideo.addEventListener("pause",function(){
//     // console.log("video is pause");
//     clearInterval(videoInt);
// })

// document.querySelector("#video_skip").addEventListener("click",function(){
//     // console.log("skip");
//     clearInterval(videoInt);
//     getVideo.pause();
//     document.querySelector(".video_over_layer").classList.add("active");

// })

// end video play

// start scroll nav active
let getNavs = document.querySelectorAll(".scrollNav");
let getsections = document.querySelectorAll(".scrollsection");

window.addEventListener("scroll",function(){
    let getPosition = this.window.scrollY+200;
    let targetSections = [];
    getsections.forEach(function(getsection){
        targetSections.push(getsection.offsetTop);
        
    })
    let getSectionPosition = [];
    targetSections.forEach(function(targetSection){
        if(targetSection >= getPosition){
            getSectionPosition.push(targetSection);
        }
    })


    let getTargetValue = getSectionPosition[0];
    let getLastValue = getSectionPosition[0];


    let getIdx = targetSections.indexOf(getTargetValue);
    let getLastIdx = targetSections.indexOf(getLastValue);

    getnavscroll(getIdx-1);

})

function getnavscroll(idx){
    getNavs.forEach(function(getNav){

        getNav.classList.remove('active');
        if(idx < 0){
            getNavs[getNavs.length-1].classList.add("active");
        }else{
            getNavs[idx].classList.add("active");
        }
        
    })
}
// end scroll nav active





// start copy right 
let getdate = new Date();
let getYear = getdate.getFullYear();
// console.log(getYear);
document.querySelector("#copyRightYear").innerText = getYear;
// end copy right





// start wow
new WOW().init();
// end wow