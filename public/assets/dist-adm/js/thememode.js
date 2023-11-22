// start theme mode

let getModeBtn = document.querySelector(".darkmode_btn");
let checkMode = document.querySelector("#night_mode");

checkMode.addEventListener('change',function(){
    if(checkMode.checked){
        // day
        document.documentElement.style.setProperty("--global-primay-color","white");
        document.documentElement.style.setProperty("--global-secondary-text-color","#000");
        document.documentElement.style.setProperty("--global-border-color","rgb(222, 221, 221)");
        document.documentElement.style.setProperty("--body-background-color","#F4F6FA");
    }else{
        // night
        document.documentElement.style.setProperty("--global-primay-color","#0C1427");
        document.documentElement.style.setProperty("--global-secondary-text-color","#d0d6e1");
        document.documentElement.style.setProperty("--global-border-color","#172340");
        document.documentElement.style.setProperty("--body-background-color","#070d19");
    }
})

// end theme mode