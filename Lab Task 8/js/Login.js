function isValid(){
    var username = document.forms['LForm']['username'].value;
    var password = document.forms['LForm']['password'].value;
    var role = document.forms['LForm']['role'].value;
   
    if(username === ""){
    document.getElementById('usernamejsE').innerHTML = "*username empty";
    
    }
    if(password === ""){
    document.getElementById('passwordjsE').innerHTML = "*password empty";
    
    }
    if(role === ""){
    document.getElementById('rolejsE').innerHTML = "*role  empty";
    return false;
    }
    else{
        return true;
    }
    
    }
