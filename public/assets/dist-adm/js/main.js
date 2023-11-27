$(document).ready(function(){
    // console.log("hello");
    $("#nav_toggle_btn").click(function(){
        // console.log("hi");
    })
})

function navBtn(){
    document.querySelector(".left_side_container").classList.toggle("active");
    document.querySelector(".right_side_container").classList.toggle("active");
}

// start show content
let getTabs = document.querySelectorAll(".aside_list_container ul li a");
let getFrame = document.querySelector(".iframe_container iframe");

let getPages = ["maindashboards","abouts","educations","skills","experiences","services","editions","collaborates","portfolios","profiles","links","phones","titles","types","statuses","logins"];


getTabs.forEach(function(getTab,idx){
    getTab.setAttribute("show-page",idx);
})

getTabs.forEach(function(getTab,idx){
    getTab.addEventListener("click",function(){
        getTabs.forEach(function(getTab){
            getTab.classList.remove("active");
        })
        this.classList.add("active");

        let getIdx = this.getAttribute("show-page");
        
        let getPageName = getPages[getIdx];
        // console.log(getPageName);

        getFrame.src = " ";
        getFrame.src = `http://127.0.0.1:8000/${getPageName}`;
    })
})


// end show content