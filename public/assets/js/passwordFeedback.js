let password = document.getElementById("password");
let passwordConfirm = document.getElementById("passwordConfirm");

passwordConfirm.onchange=function(){
    if(password.value == passwordConfirm.value){
        passwordConfirm.style.border="2px solid green";
        password.style.border="2px solid green";
    }else{
        passwordConfirm.style.border="2px dotted red";
    }
}