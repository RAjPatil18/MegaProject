<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    .container input{
      margin: 5px 5px;
      border:2px solid black;
    }
    </style>

   </head>
<body>
  <div class="container" style="height:90%">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="images/frontImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Every new friend is a <br> new adventure</span>
          <span class="text-2">Let's get connected</span>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="images/backImg.jpg" alt="">
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="login.php" method="POST" onsubmit="return validdetails()">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" id="loginemail" name="logemail" placeholder="Enter your email"  style="border:2px solid black;">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" id="loginpass" name="logpass" placeholder="Enter your password"  style="border:2px solid black;">
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" name="login" value="Login">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="reg.php" method="POST" onsubmit="return validate()" >
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="fname"  placeholder="Enter your name" style="border:2px solid black; margin-top:7px;">
              </div>
              <span id="wrong_fname" class="text-danger"></span>
              <!-- <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" id="lname" placeholder="Last name" >
              </div> -->
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="emailAddress" id="email" placeholder="Enter your email" style="border:2px solid black;">
              </div>
              <div class="input-box">
               
                <i class="fa fa-phone"></i>
                <input type="text" name="phoneNumber" id="phone" placeholder="Enter your phone" style="border:2px solid black;">
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="createPassword" id="pass" placeholder="Enter your password"style="border:2px solid black;" >
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirmPassword" id="cpass" placeholder="Confirm password" style="border:2px solid black;">
              </div>
              <div class="button input-box">
                <input type="submit" name="submitInfo" value="register">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
<script>

function validdetails(){
  var email=document.getElementById('loginemail').value;
  var pass=document.getElementById('loginpass').value;
  var email_regex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if((email=="") ||  !(email_regex.test(email)) ){
  document.getElementById('loginemail').style.border="2px solid red";
  return false; 
}

if(pass==""){
  document.getElementById('loginpass').style.border="2px solid red";
  return false;
}
// if(){
//   document.getElementById('email').style.border="2px solid red"; 
//   return false;
// }


}





function validate(){

  var name=document.getElementById('fname').value; 
  var email=document.getElementById('email').value;
   var phone=document.getElementById('phone').value; 
   var pass=document.getElementById('pass').value; 
   var cpass=document.getElementById('cpass').value; 
 if(name==""){
   document.getElementById('fname').style.border="2px solid red";
  return false; 
}
if((name.length<=2 ) || (name.length>30)){
   document.getElementById('fname').style.border="2px solid red";
  return false; 
}
var name_regex=/[0-9]+/

if(name_regex.test(name)){
   document.getElementById('fname').style.border="2px solid red";
  return false; 
}








// var email_regx=/^ ([a-zA-Z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})?$/
var email_regex=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email==""){

  document.getElementById('email').style.border="2px solid red";
  return false; 
}
if(!(email_regex.test(email))){
  document.getElementById('email').style.border="2px solid red"; 
  return false;
}

var phone_regx=/^[6-9][0-9]{9}$/
if(phone==""){
 
  document.getElementById('phone').style.border="2px solid red";
  return false; 
}
if(!(phone_regx.test(phone))){
  document.getElementById('phone').style.border="2px solid red";
  return false; 
}





if(pass==""){  document.getElementById('pass').style.border="2px solid red";
  return false; 
}
if((pass.length<=5 ) || (pass.length>20)){
   document.getElementById('pass').style.border="2px solid red";
  return false; 
}

if(cpass==""){
 
  document.getElementById('cpass').style.border="2px solid red";
  return false; 
}

if(pass!=cpass){
  document.getElementById('pass').style.border="2px solid red";
  document.getElementById('cpass').style.border="2px solid red";
  return false; 

}

}

</script>


</body>
</html>
