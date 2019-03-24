// Registration Modal form
function register(){
var modal = document.getElementById('myform');

var icon = document.getElementById("mypopup");

var span = document.getElementsByClassName("close")[0];
 
icon.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
}




// Inputs validation
function validations() 
{

var email= document.getElementById("email").value;
var password = document.getElementById("password").value;
var confirmpassword = document.getElementById("confirmpassword").value;
var phone = document.getElementById("phone").value;
var atpos = email.indexOf("@");
var dotpos = email.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
     {

      var Message = 'Please enter a valid email address'
      document.getElementById('output').style.color = 'red'
      document.getElementById('output').innerHTML = Message
      return false
     }

     if(password.length<6 )
     {
      var Message = 'The password must be above 6 characters'
      document.getElementById('output').style.color = 'red'
      document.getElementById('output').innerHTML = Message
      return false
     }
     else if (password!=confirmpassword) 
     {
        var Message = 'The passwords do not match'
        document.getElementById('output').style.color = 'red'
        document.getElementById('output').innerHTML = Message
        return false
     }
      if(/^\d{10}$/.test(phone))
    {
     return true;
    }
    else
    {
      var Message = 'Please enter a valid phone number'
      document.getElementById('output').style.color = 'red'
      document.getElementById('output').innerHTML = Message
      return false
    }
  
}

// Chat
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}