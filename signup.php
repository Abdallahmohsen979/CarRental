<?php
$nameerr="";
$mailerr="";
$passerr="";
$phoneerr="";
$nameflag=$passflag=$emailflag=$passflag=$phoneflad=false;
if(isset($_POST["submit"]))
{
  $name=$_POST["username"];
  $email=$_POST["email"];
  $pass=$_POST["password"];
  $phone=$_POST["phone"];
  if(empty($name))
    $nameerr="name is required";
  else {
      $nameflag=true;
    }
  if(empty($email))
  $mailerr="email is required";
  else {
    $emailflag=true;
  }
  if(empty($pass))
  $passerr="password is required";
  else {
    $passflag=true;
  }
    if(empty($phone))
    $phoneerr="phone is required";
    else {
      $phoneflag=true;
  }



  if($emailflag==true&&$nameflag==true && $passflag==true)
  {
    $con=mysqli_connect("localhost" ,"root","","carrental");
    $query1=mysqli_query($con,"select * from customer where email='$email'");
    if( mysqli_num_rows($query1)>0)
    {
        echo "the email already exist";
    }

   else
    $query=mysqli_query($con,"INSERT into `customer` (`name` , `email` , `password`,`phone`) values ('$name','$email','$pass',`phone`)");

    if($query)
    {
      echo "Succesfull";
       header("Location: index.php");
    }
    else {
      echo "failed ";
    }

  }
}

 ?>
 <!DOCTYPE html>
 <html >
   <head>
     <meta charset="utf-8">
     <title>Sign Up</title>
     <style media="screen">
        body{background:gray;}
       .form{padding: 20px;border-radius: 80px;margin:0 auto; width: 500px;border: 1px solid #456;background: #fff}
       input{width: 350px;padding: 5px;background:#fff;margin-left: 100px;border-radius: 15px;}
       #submit{background:#5b67ab;width: 100px;font-weight: bold;font-size: 16px;color:white;border-radius: 10px;margin-left: 200px;}

       label{color:#5b67ab;margin-left: 100px;font-size: 18px;font-family: cursive;font-weight: bold;}
       p{color: white;background: #f3786f;padding: 5px;width: 250px;display: none;margin-left: 100px}
       .signup{margin-left: 165px;font-size: 36px;color:#5b67ab}
     </style>
   </head>
   <body>
     <div class="form">


     <form  action=" signup.php" method="post">
       <label class="signup">Sign UP</label>
       <br><br>
       <label>Name</label><br>
       <input  id="name" type="text"  onmouseout="validationofname()" name="username"  placeholder="your full name">
        <span> <?php echo $nameerr ?> </span>
       <p id="emptyname">the name can not be empty</p>
       <p id="notchar" >the name  must be character only</p><br><br>
       <br><br>
       <label>Email</label><br>
        <input id="email" type="text" onmouseout="validationofmail()" name="email" placeholder="Eg. example@email.com">
        <span> <?php echo $mailerr ?> </span>
       <p id="emptymail">the email can not be empty</p>
       <p id="notmail" >the email  must be  invalid form</p><br><br>
       <br><br>
       <label>Phone</label><br>
       <input id="phone" type="text"  onmouseout="validationofphon()"  name="phone"placeholder="Eg. +20 01000000000" >
       <span> <?php echo $phoneerr ?> </span>
       <p id="emptyphone">the phone can not be empty</p>
       <p id="phonelength" >the phone  must be 11 diget number</p>

       <br><br><br><br>

       <label> Password</label><br>
       <input id="pass" type="password" onmouseout="validationofpass()" name="password" placeholder="Enter Your Password">
        <span> <?php echo $passerr ?> </span>
        <p id="emptypass">the password can not be empty</p><br><br>
       <br><br>

       <label>Confirm Password</label><br>
     <input id="cpass" type="password" onmouseout=" confirmpass()" placeholder="Confirm Password "><br><br>
     <p id="emptycpass">the cpassword can not be empty</p>
     <p id="cpas">The password not the same</p><br><br>

        <input id="submit"type="submit" name="submit" value="SignUp">


     </form>
        </div>
        <script src="js.js" charset="utf-8"></script>
   </body>
 </html>
