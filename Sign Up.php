<?php
$nameflag=$passflag=$emailflag=$phoneflag=true;
if(isset($_POST["submit"]))
{
  $name=$_POST["namee"];
  $email=$_POST["emaile"];
  $password=$_POST["passworde"];
  $phone=$_POST["phonee"];
  if(empty($name))
    $nameflag=false;

  if(empty($email))
  $emailflag=false;

  if(empty($passw))
  $passflag=false;
  if($emailflag==true&&$nameflag==true && $passflag==true)
  {
    $con=mysqli_connect("localhost" ,"root","","carrental");
    $query=mysqli_query($con,"INSERT into `customer` (`name` , `email` , `password`,`phone`) values ('$name','$email','$pass',`phone`)");

    if($query)
    {
        header("Location :index.php");
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
    body{background: #fff}
      .form{padding: 20px;border-radius: 50px;width: 580px;margin:0 auto;}
      input{width: 500px;padding: 5px;background:#f9f7f5 }
      #submit{background:#625;width: 100px;font-weight: bold;font-size: 16px;color:#fff;border-radius: 10px;}
      h1{color:#625;text-align: center;font-family: cursive;}
      label{color:#625;}
      p{background: #f3786f;padding: 5px;width: 250px;display: none;}
    </style>
  </head>
  <body>
    <div class="form">
      <form  action="index.php" method="POST">
        <h1>Sigin Up</h1>

        <label>Name</label><br>
        <input  name="namee" id="name" type="text"  onmouseout="validationofname()" ><br><br>
        <p id="emptyname">the name can not be empty</p>
        <p id="notchar" >the name  must be character only</p><br><br>


        <label>Phone number</label><br>
        <input  name="phonee" id="phone" type="text"  onmouseout="validationofphon()" ><br><br>
        <p id="emptyphone">the phone can not be empty</p>
        <p id="phonelength" >the phone  must be 11 diget number</p><br><br>

          <label>e-mail</label><br>
        <input name="emaile" id="email" type="text" onmouseout="validationofmail()"><br><br>
        <p id="emptymail">the email can not be empty</p>
        <p id="notmail" >the email  must be  invalid form</p><br><br>

          <label>Password</label><br>
        <input name="passworde" id="pass" type="password" onmouseout="validationofpass()"><br><br>
        <p id="emptypass">the password can not be empty</p><br><br>

          <label>Confirm Password</label><br>
        <input id="cpass" type="password" onmouseout=" confirmpass()" ><br><br>
        <p id="emptycpass">the cpassword can not be empty</p>
        <p id="cpas">The password not the same</p><br><br>

      <input id="submit" type="submit" value="Submit" onclick="done()" >

      </form>
    </div>
    <script src="js.js" charset="utf-8"></script>
  </body>
</html>
