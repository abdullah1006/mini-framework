//header fixed
window.onscroll=function(){
    //console.log(document.documentElement.scrollTop);
    const docScrollTop=document.documentElement.scrollTop;
    if(window.innerWidth>991){
        if(docScrollTop>100){
            document.querySelector("header").classList.add("fixed")
        }
        else{
            document.querySelector("header").classList.remove("fixed")
        }
    }
} 

const navbar = document.querySelector(".navbar");
    a=navbar.querySelectorAll("a");
    a.forEach(function(element){
        element.addEventListener("click",function(){
            for(let i=0; i<a.length; i++){
                a[i].classList.remove("active");
            }
            this.classList.add("active")
        })
    })