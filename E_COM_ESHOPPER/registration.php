<?php



require('connect.php');


$msg = "";

if (isset($_POST['submit'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   

   $sql = "select * from custmer_user where email='$email'";
   $result = mysqli_query($con,$sql);
   $num = mysqli_num_rows($result);
   if ($num==1) {
      $msg = "<h4 style='color:red;'>User already register</h4>";
      /*header('location:login.php');*/
   }else
   {
      
      $insert = "insert into custmer_user(name,password,email,mobile)value('$username','$password','$email','$mobile')";
      mysqli_query($con,$insert);
      $_SESSION['username']=$username;
      header('location:login.php');
   }

}


?>









 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
   <link href="css/main.css" rel="stylesheet">
   <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
   
   <section id="form" >
      <div class="container">
         <div class="row">


            <div class="col-sm-4" style="padding-top:-5px;">
               <div class="signup-form"><!--sign up form-->


                  <h2>New User Signup!</h2>

   <!-- <form action="registration.php" method="post"> -->

                     <form action="" onsubmit="return validation()" method="post">

                        <label>User name</label>
                  <input type="text" placeholder="" name="username" id="name" value="" autocomplete="off" />
                     <span id="username" class="text-danger font-weight-bold"></span><br>


                     <label>Password</label>
                  <input type="password" placeholder="" id="password" name="password" value="" autocomplete="off"/>
                     <span id="passwords" class="text-danger font-weight-bold"></span><br>


                     <label>Email</label>
                  <input type="text" placeholder="" name="email" id="email" value="" autocomplete="off"/>
                     <span id="emailids" class="text-danger font-weight-bold"></span><br>

                     <label>Mobile</label>
                     <input type="text" placeholder="" id="mobile" name="mobile" value="" autocomplete="off"/>
                     <span id="mobileno" class="text-danger font-weight-bold"></span><br>

                     <button type="submit" class="btn btn-default" name="submit" value="submit">Signup</button>



                    <div class="row" style=" padding-left: -30px;">
         <div class="col-md-3">
            <button type="submit" class="btn btn-default" name="submit" value="submit" style="  margin-top: 31px; color: white;">
            <a class="btn btn-outline-dark" onclick="window.location = '<?php echo $loginURL ?>';" name="google"  href="/users/googleauth" role="button" style="text-transform:none">
              <img width="50px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
             Login with Google
            </a></button>
         </div>
        </div>




                     <?php
                     echo $msg;
                     ?>
                  </form>
               </div><!--/sign up form-->
            </div>


            

         </div>
      </div>
   </section><!--/form-->
   



<!-- javscript form validation -->



<script type="text/javascript">
   
function validation(){
   var name = document.getElementById('name').value;
   var email = document.getElementById('email').value;
   var mobile = document.getElementById('mobile').value;
   var password = document.getElementById('password').value;

//user

   if (name=="") {
      document.getElementById('username').innerHTML="pleas fill the username";
      return false;
   }
   if ((name.length<=2)||(name.length>20)) {
         document.getElementById('username').innerHTML="user length between 2 to 20";
      return false;
   }

//email

      if (email =="") {
      document.getElementById('emailids').innerHTML="pleas fill the email";
      return false;
   }
   if (email.indexOf('@')<=0) {
      document.getElementById('emailids').innerHTML="@ invalid position";
      return false;
   }

   if ((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')) {
         document.getElementById('emailids').innerHTML=". invalid position";
      return false;
   }


//mobile number


   if (mobile =="") {
      document.getElementById('mobileno').innerHTML="pleas fill the mobile number";
      return false;
   }
   
   if (mobile.length!=10) {
      document.getElementById('mobileno').innerHTML="you must use only 10 digits";
      return false;
   }


//password


   if (password =="") {
      document.getElementById('passwords').innerHTML="pleas fill the password";
      return false;
   }
   if ((password.length<=5)||(password.length>20)) {
         document.getElementById('passwords').innerHTML="password length between 5 to 20";
      return false;
   }

}


</script>

  

</body>
</html>







  