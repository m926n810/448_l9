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
    if(allhidden){
        document.getElementById('submit-butt').classList.add('hidden');
    }
    else document.getElementById('submit-butt').classList.remove('hidden');
}

function rm_item_handler(item){
    let itemname;
    switch (item){
        case 'i1':
            itemname = 'coconut';
            break;
        case 'i2':
            itemname = 'avocado';
            break;
        case 'i3':
            itemname = 'umbrella';
            break;
        case 'i4':
            itemname = 'yacht';
            break;
    }
    document.getElementById(item).classList.add('hidden');
    checkout_button_handler();
    document.getElementsByClassName(itemname).value=0;
}


