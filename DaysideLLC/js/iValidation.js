// interest from validation
document.getElementById("iForm").onsubmit = validate2;

function validate2(){

    // create a flag variable
    let valid = true;

    // clear all errors
    let errors = document.getElementsByClassName("err");
    for(let i=0; i<errors.length; i++){
        errors[i].style.visibility = "hidden";
    }
    //check first name
    let first = document.getElementById("fName").value;
    if(first==""){
        let errFirst = document.getElementById("errFname");
        errFirst.style.visibility = "visible";
        valid = false;
    }
    //check last name
    let last = document.getElementById("lName").value;
    if(last==""){
        let errLast = document.getElementById("errLname");
        errLast.style.visibility = "visible";
        valid = false;
    }

    // check phone number
    let phoneNumber = document.getElementById("phone").value;
    if(phoneNumber==""){
        let errPhoneNumber = document.getElementById("errPhone");
        errPhoneNumber.style.visibility="visible"
        valid=false;
    }

    //check email input
    let email = document.getElementById("email").value;
    if (email === "") {
        let errEmail = document.getElementById("errEmail");
        errEmail.style.visibility = "visible";
        valid = false;
    } else if (email.indexOf("@") === -1 || email.indexOf(".") === -1) {
        let errEmail = document.getElementById("errEmail");
        errEmail.textContent = "⚠ Email must contain \"@\" and \".\""
        errEmail.style.visibility = "visible";
        valid = false;
    }

    return valid;
}
