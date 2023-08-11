// homepage animation
const span=document.querySelectorAll("span")
index=0;
inTimer=3000
outTimer=2000;
function addclass(){

    for(let i=0;i<span.length;i++){
        span[i].classList.remove("text-in","text-out");
    }
    span[index].classList.add("text-in");

    setTimeout(function(){
        span[index].classList.add("text-out");
    },outTimer)

    setTimeout(function(){
        if(index==(span.length-1)){
            index=0;
        }
        else{
            index=index+1;
        }  
        addclass()
    },inTimer)
}
window.onload= addclass

// active nav
const activepath=window.location.pathname;
const link= document.querySelectorAll('nav a').forEach(a=>{
    if(a.href.includes(`${activepath}`)) {
            a.classList.add('active')
    }  
})

// fa icons functions
const navlinks= document.querySelector("nav");
    function showmenu(){
        navlinks.style.right="0";
}
    function hidemenu(){
        navlinks.style.right="-200px"
    }
