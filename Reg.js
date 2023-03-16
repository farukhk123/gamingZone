function register(){
 
  var password = document.getElementById("password").value;
  var confirmPassword = document.getElementById("confpassword").value;
  // alert("dsd")
  
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  var num = document.getElementById('phone');
  
  if(password==""){
    window.alert("Fill the password");
  }
  else if(password==confirmPassword){
    // window.alert("Password Matched.");
    
  }
  else{ 
    alert("1 Upper case,1 Lower case,1 Special charcter(#!@#$%^&*)and 1 Numeric letterare required in password field")
   
  }
    // alert(num)
    if(num.value.match(phoneno)){
      return true;
        }
      else
        {
        alert("Please enter 10 digit number.");
        return false;
        }

}
  

