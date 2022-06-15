var x = 0; //beds start point

var i = 0; //walls start point

var z = 0; //reconstruction start point

var a = 0; //tree services start point

var time = 2000; //time in milliseconds





var images = [];

var images0 = [];

var images1 = [];

var images2 = [];



//list of images



//beds slideshow

images[0] = 'images/landscaping/stone-bed.JPG'; 

images[1] = 'images/landscaping/stone-bed2.JPG'; 



//retaining walls slideshow

images0[0] = 'images/landscaping/retaining-wall2.JPG'; 

images0[1] = 'images/landscaping/reconstruction-after.JPG'; 



//reconstruction slideshow

images1[0] = 'images/landscaping/reconstruction-before.jpg'; 

images1[1] = 'images/landscaping/reconstruction-after.JPG'; 



//tree services

images2[0] = 'images/landscaping/tree-services-before.jpg'; 

images2[1] = 'images/landscaping/tree-services-after.jpg'; 



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



//tree services

function changeImg3(){

    document.slides2.src = images2[a];

    if(a < images2.length-1){

        a++;

    }else {

        a = 0;

    }

   

    setTimeout("changeImg3()" , time);

 }



    window.addEventListener("load", changeImg);

    window.addEventListener("load", changeImg1);

    window.addEventListener("load", changeImg2);

    window.addEventListener("load", changeImg3);