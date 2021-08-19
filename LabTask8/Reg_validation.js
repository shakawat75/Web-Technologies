

form = document.forms["signup-form"]
//shop name validation
shop_name = form.sname
shop_name.addEventListener("input", function (event) {
  document.getElementById("name_err").innerHTML = ""
  if (shop_name.value == ""){
    
    document.getElementById("name_err").innerHTML = "*Shop name is required";
  }
  else {
    regex = /^[a-zA-Z-0-9 ]{2,}$/;
    if (regex.test(shop_name.value))
    {
      
    }
    else
    {
      
      document.getElementById("name_err").innerHTML = "*Name must contain at least two characters";
    }
  }
  
})

//address validation
address = form.sadd
address.addEventListener("input", function (event) {
  document.getElementById("add_err").innerHTML = ""
  if (address.value == ""){
   
    document.getElementById("add_err").innerHTML = "*Shop location is required";
  }
  
})
//Email Validation
email = form.email
email.addEventListener("input", function (event) {
  document.getElementById("email_err").innerHTML = ""
  if (email.value == ""){
    
    document.getElementById("email_err").innerHTML = "*Email is required";
  }
  else {
    regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (regex.test(email.value))
    {
     
    }
    else
    {
      
      document.getElementById("email_err").innerHTML = "*Invalid email format";
    }
  }
  
})

//password validation
password = form.tpass
password.addEventListener("input", function (event) {
  document.getElementById("pass_err").innerHTML = ""
  if (password.value == ""){
    
    document.getElementById("pass_err").innerHTML = "*Password is required";
  }
  else {
    regex = /^(?=.*?[A-Z0-9])(?=.*?[a-z0-9])(?=.*?[$@&#%]).{8,}$/;
    if (regex.test(password.value))
    {
     
    }
    else
    {
     
      document.getElementById("pass_err").innerHTML = "*Password must contain at least one uppercase,one lowercase,one number and one special character";
    }
  }
  
})

//contact number validation
contact = form.Cnum
contact.addEventListener("input", function (event) {
  document.getElementById("cnum_err").innerHTML = ""
  if (contact.value == ""){
    
    document.getElementById("cnum_err").innerHTML = "*Contact number is required";
  }
  else {
    regex = /^(?:\+88|88)?(01[3-9]\d{8})$/;
    if (regex.test(contact.value))
    {
     
    }
    else
    {
     
      document.getElementById("cnum_err").innerHTML = "*Invalid phone number must start with(+88/01)";
    }
  }
  
})

//confirm password validation
cpass = form.cpass
cpass.addEventListener("input", function (event) {
  document.getElementById("cpass_err").innerHTML = ""
  if (cpass.value == ""){
    
    document.getElementById("cpass_err").innerHTML = "*You need to confirm your password!";
  }
  else {
    if (cpass.value==password.value)
    {
      
    }
    else
    {
      
      document.getElementById("cpass_err").innerHTML = "*Mismatched password.. Try again.";
    }
  }
  
})
