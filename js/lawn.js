var x = 0; //beds start point
var i = 0; //walls start point
var z = 0; //reconstruction start point
var time = 2000; //time in milliseconds


var images = [];
var images0 = [];
var images1 = [];

//list of images

//gutter slideshow
images[0] = '../images/lawn/gutter-cleanup-before.PNG'; 
images[1] = '../images/lawn/gutter-cleanup-after.JPG'; 

//spring clean up slideshow
images0[0] = '../images/lawn/spring-cleanup-before.JPG'; 
images0[1] = '../images/lawn/spring-cleanup-after.JPG'; 

//fall clean up slideshow
images1[0] = '../images/lawn/fall-cleanup-before.jpg'; 
images1[1] = '../images/lawn/fall-cleanup-after.jpg'; 


//slider effects

//beds
function changeImg(){
    document.slides.src = images[x];
    if(x < images.length-1){
        x++;
    }else {
        x = 0;
    }
   
    setTimeout("changeImg()" , time);
 }

 //retaining walls
function changeImg1(){
    document.slides0.src = images0[i];
    if(i < images0.length-1){
        i++;
    }else {
        i = 0;
    }
               
    setTimeout("changeImg1()" , time);
}

//reconstruction
function changeImg2(){
    document.slides1.src = images1[z];
    if(z < images1.length-1){
        z++;
    }else {
        z = 0;
    }
   
    setTimeout("changeImg2()" , time);
 }



    window.addEventListener("load", changeImg);
    window.addEventListener("load", changeImg1);
    window.addEventListener("load", changeImg2);
