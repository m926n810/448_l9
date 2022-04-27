

let cartscreen;
let password;
let email;
let loginyet=false;


function login(){
    let warning = document.getElementById("pw");
    let loginscreen = document.getElementById("loginid");

    cartscreen= document.getElementById('cartid');
    password = document.getElementById('password').value;
    email = document.getElementById('email').value;
    console.log(email);
    console.log(password);
    if(password=="" || !email.includes('@')|| !email.includes('.')){
        if(warning.style.opacity == "1") warning.style.opacity="0";
        else warning.style.opacity="1";
    }else{
        loginscreen.style.display ="none";
        cartscreen.style.display="flex";
        loginyet = true;
    }
}

function checkout_button_handler(){
    let allhidden=true;
    let incartitems = document.getElementsByClassName("addeditem");
    for(let i=0;i<incartitems.length;i++){
        if(!incartitems[i].classList.contains('hidden')) allhidden=false;
        console.log(incartitems[i].id);
    }
    if(allhidden) document.getElementsByClassName('check-out')[0].classList.add('hidden');
    else document.getElementsByClassName('check-out')[0].classList.remove('hidden');
}




