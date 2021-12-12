function isValid(){
    var name = document.forms['RForm']['name'].value;
    var username = document.forms['RForm']['username'].value;
    var password = document.forms['RForm']['password'].value;
    var email = document.forms['RForm']['email'].value;
    var userType = document.forms['RForm']['userType'].value;
    var gender = document.forms['RForm']['gender'].value;
   
    if(name === ""){
    document.getElementById('namejsE').innerHTML = "*Name empty";
    
    }
    if(username === ""){
    document.getElementById('usernamejsE').innerHTML = "*Username empty";
    
    }
    if(password === ""){
    document.getElementById('passwordjsE').innerHTML = "*Password empty";
    
    }
     if(email === ""){
    document.getElementById('emailjsE').innerHTML = "*Email empty";
    
    }
    if(userType === ""){
    document.getElementById('rolejsE').innerHTML = "*User type empty";
   
    }
    if(gender === ""){
        document.getElementById('genderjsE').innerHTML = "*Gender empty";
       
        }
    else{
        return true;
    }
    
    }