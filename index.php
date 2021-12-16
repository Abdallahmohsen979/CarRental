<?php
session_start();
if(isset($_POST["submit"]))
{
  $email=$_POST["email"];
  $pass=$_POST["password"];
  $con=mysqli_connect("localhost" ,"root","","carrental");
  $sql= "SELECT * FROM customer WHERE email = '$email' AND password = '$pass' ";
  $query= "SELECT * FROM admin WHERE email = '$email' AND password = '$pass' ";
  $result1 = mysqli_query($con,$sql);
  $result2 = mysqli_query($con,$query);
  $check1 = mysqli_num_rows($result1);
  $check2 = mysqli_num_rows($result2);
  if($check1>0)
  {
  header("location:home-page.php");

	$_SESSION['user']=$email;
  }
  else if($check2>0)
  {
      header("location:admin function.php");

    $_SESSION['user']=$email;


  }
  else
  {
  echo 'invalid email or password';
  }


}

 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <style media="screen">
    body {
        background: #864e61;
    }

.login-page {
 width: 360px;
 padding: 8% 0 0;
 margin: auto;

}
.form {
 position: relative;
 z-index: 1;
 background: #FFFFFF;
 max-width: 360px;
 margin: 0 auto 100px;
 padding: 45px;
 text-align: center;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
 border-radius: 50px;

}
#btn,#submit
{
  background: #bf8296;
  font-family: monospace;
  font-weight: bold;
  font-size: 16px;
  color: white;
}
.form input {
 font-family: "Roboto", sans-serif;
 outline: 0;
 background: #f2f2f2;
 width: 100%;
 border: 0;
 margin: 0 0 15px;
 padding: 15px;
 box-sizing: border-box;
 font-size: 14px;
 border: 1px solid black;
 border-radius: 15px;

}

label{
  margin-right: 200px;
  font-family: cursive;
  font-weight: bold;
    color: #bf8296;
}
h1{
  text-align: center;
  font-family: cursive;
  font-weight: bold;
  color: #bf8296;
}


    </style>
  </head>
  <body>
  <div class="login-page">
      <div class="form">
        <form class="" action="index.php" method="post">
          <h1>Sign In</h1>

            <label>E-mail</label><br>
          <input name="email"type="E-mail" placeholder="Enter your E-mail"><br><br>

            <label>Password</label><br>
          <input  name="password" id="pass" type="password"  placeholder="Enter your Password"><br><br>
          <input id ="btn" type="reset" value="Reset" >
        <input   name="submit"id="submit" type="submit" value="Log In"  >
        <a href="signup.php">  <input  style="text-align:center" id="submit"  value="Sign Up" ></a>
      </div>



    </form>
    </div>
  </body>
</html>
