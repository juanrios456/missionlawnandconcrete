//Get Data
const nameInput = document.querySelector("#name");
const phone = document.querySelector("#phone");
const email = document.querySelector("#email");
const city = document.querySelector("#city");
const success = document.querySelector("#success");
const errorNodes = document.querySelectorAll(".error");

//validats Data 
function validateForm(){
    
    clearMessages();
    let errorFlag = false;
    
    if (nameInput.value.length < 1 ) {
        errorNodes[0].innerText = "Name cannot be blank";
        nameInput.classList.add("error-border");
        errorFlag = true;
    }
    if (!phoneIsValid(phone.value)) {
        errorNodes[1].innerText = "Enter a Valid Phone Number";
        phone.classList.add("error-border");
        errorFlag = true;
    }
    if (city.value.length < 1 ) {
        errorNodes[2].innerText = "Enter a City";
        city.classList.add("error-border");
        errorFlag = true;
    }
    if(!emailIsValid(email.value)){
        errorNodes[3].innerText = "Enter a valid email address";
        email.classList.add("error-border");
        errorFlag = true;
    }
    if(!errorFlag){
        success.innerText = "Success";
    }
}

//clears errors / gives success messages 
function clearMessages(){
    for(let i = 0; i < errorNodes.length; i++) {
        errorNodes[i].innerText = "";
    }
    success.innerText = "";
    nameInput.classList.remove("error-border");
    email.classList.remove("error-border");
    phone.classList.remove("error-border");
    city.classList.remove("error-border");
}

//Checks to make sure the email is valid
function emailIsValid(email){
    let pattern = /\S+@\S+\.\S+/;
    return pattern.test(email);
}

function phoneIsValid(phone){
    let pattern =  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    return pattern.test(phone);
}