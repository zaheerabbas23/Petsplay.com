
const images = document.querySelectorAll('.slideshow-main img');

let i = 0;

setInterval(function(){

    if(i==0){
        images[i].style.display='block';
    }
    else if(i==images.length){
        images[i-1].style.display='none';
        images[0].style.display='block';
        i=0;
    }
    else{
        images[i-1].style.display='none';
        images[i].style.display='block';
    }    

    i++;

}, 4000);



// testimonial

var btn = document.getElementsByClassName("btn");
var slide = document.getElementById("slide");


btn[0].onclick = function(){
    slide.style.transform = "translateX(0px)";
    for(i=0;i<4;i++){
        btn[i].classList.remove("t-active")
    }
    this.classList.add("t-active")
}
btn[1].onclick = function(){
    slide.style.transform = "translateX(-800px)";
    for(i=0;i<4;i++){
        btn[i].classList.remove("t-active")
    }
    this.classList.add("t-active")
}
btn[2].onclick = function(){
    slide.style.transform = "translateX(-1600px)";
    for(i=0;i<4;i++){
        btn[i].classList.remove("t-active")
    }
    this.classList.add("t-active")
}
btn[3].onclick = function(){
    slide.style.transform = "translateX(-2400px)";
    for(i=0;i<4;i++){
        btn[i].classList.remove("t-active")
    }
    this.classList.add("t-active")
}




