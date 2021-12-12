function jsValid() 
    { 
        const form = document.getElementById('editform'); // full form
        const name = document.getElementById('name'); // full input field
        const email = document.getElementById('email');
        const gender = document.forms["editform"]["gender"];
        // const Dob = document.getElementById('Dob');
        // const Religion = document.getElementById('Religion');
        const address = document.getElementById('address');
        // const Permanentaddress = document.getElementById('Permanentaddress');
        // const Phone = document.getElementById('Phone');
        // const Email = document.getElementById('Email');
        // const Website = document.getElementById('Website');
        const username = document.getElementById('username');
        const dd = document.getElementById('dd');
        const mm = document.getElementById('mm');
        const yy = document.getElementById('yy');
        

        var flag = true;       
        checkInputs();

 

        function checkInputs() {
            //get the value from inputs.

            const nameValue = name.value.trim(); // full input field 
            const genderValue = gender.value.trim();   
            // const DobValue = Dob.value.trim();   
            // const ReligionValue = Religion.value.trim();   
            const addressValue = address.value.trim();   
            // const PermanentaddressValue = Permanentaddress.value.trim();   
            // const PhoneValue = Phone.value.trim();   
            const emailValue = email.value.trim();   
            // const WebsiteValue = Website.value.trim();   
            const usernameValue = username.value.trim(); 
            const ddValue = dd.value.trim();
            const mmValue = mm.value.trim();
            const yyValue = yy.value.trim();

             


            if (nameValue === ''){
                //show error
                // add error class
                setErrorFor(name,'Name cannot be blank');
                flag = false;
            }
            else if(nameValue.length > 30){
                setErrorFor(name,'Firstname cannot be > 30 character');
                flag = false;
            }
            else{
                // add success class
                setSuccessFor(name);
            }

 
            if (gender[0].checked == false && gender[1].checked == false && gender[2].checked == false){
                setErrorFor(gender[0],'Gender cannot be empty') 
                flag = false;
            }
            else if(genderValue.length > 10) {
                setErrorFor(gender,'Gender cannot be > 15 character');
                flag = false;
            }
             else setSuccessFor(gender[0]);



            if(addressValue.length > 100) {
                setErrorFor(address,'Presentaddress cannot be > 100 character');
                flag = false;
            }
            else setSuccessFor(address);


            if (emailValue === '') {
                setErrorFor(email,'Email cannot be blank');
                flag = false;
            }
            else if(emailValue.length > 30) {
                setErrorFor(email,'Email cannot be > 30 character');
                flag = false;
            }
            else setSuccessFor(email);

            if (usernameValue === '') {
                setErrorFor(username,'Username cannot be blank');
                flag = false;
            }
            else if(usernameValue.length > 15) {
                setErrorFor(username,'Username cannot be > 15 character');
                flag = false;
            }
            else setSuccessFor(username);


 

         
          }

         function setErrorFor(input, message)
         {
            const formControl = input.parentElement; // .form-control
            const small = formControl.querySelector('small');

            // add error message inside small
            small.innerText = message;

            // add error class
            formControl.className = 'form-control error';
         } 

         function setSuccessFor(input)
         {
            const formControl = input.parentElement; // .form-control
         
            // add success class
            formControl.className = 'form-control success';
         }

         return flag;
         
    }
 