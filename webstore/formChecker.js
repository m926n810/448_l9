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
    checkout_button_handler();
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
    else {
        document.getElementById('submit-butt').classList.remove('hidden')
    };
}

function rm_item_handler(item){
    let itemname = nameof(item);
    document.getElementById(item).classList.add('hidden');
    checkout_button_handler();
    document.getElementsByClassName(itemname)[0].value=0;
}

function addtocart_button_handler(item){
    if(loginyet){
            let itemname = nameof(item);
        let itemincart = document.getElementById(item);
        if(itemincart.classList.contains('hidden')){
            itemincart.classList.remove('hidden');
            document.getElementsByClassName(itemname)[0].value=1;
            checkout_button_handler();
        }else{
            console.log(itemname);
            console.log(document.getElementsByClassName(itemname)[0]);
            document.getElementsByClassName(itemname)[0].stepUp(1);
        }
    }
}

function nameof(i){
    switch (i){
        case 'i1':
            return 'coconut';
        case 'i2':
            return 'avocado';
        case 'i3':
            return 'umbrella';
        case 'i4':
            return 'yacht';
    }
}