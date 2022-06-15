var x = 0; //slide start point
var time = 2000; //time in milliseconds

var images = [];
var images0 = [];

//repair slideshow
images[0] ='images/concrete/repair-before.jpg'
images[1] ='images/concrete/repair-after.jpg'

//Slider effects 

//repair slider
function slider1(){
    document.slides.src = images[x];
    if(x < images.length-1){
        x++;
    }else {
        x = 0;
    }
   
    setTimeout("slider1()" , time);
 }



 window.addEventListener("load", slider1);




