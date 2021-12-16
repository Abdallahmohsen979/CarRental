<?php

session_start();
if(!isset($_SESSION['user']))
{
	header('location:index.php');

}
$city="";
$pickupdate="";
$pickuptime="";
$dropoffdate="";
$dropofftime="";
$code="";
if(isset($_POST["submit"]))
{


  $icity=$_POST["city"];
  $pickdate=$_POST['pickdate'];
  $picktime=$_POST['picktime'];
  $dropdate  =$_POST['dropdate'];
  $droptime=$_POST['droptime'];
	$code=$_POST['code'];

	$con=mysqli_connect("localhost" ,"root","","carrental");
	$sql= "SELECT * FROM booking WHERE code = '$code' ";
	$result1 = mysqli_query($con,$sql);
	$check = mysqli_num_rows($result1);

	if($check>0)
	{

	header("location:done2.html");

	}
	else {
		  $query=mysqli_query($con,"INSERT into `booking` (`code` , `pickupdate` , `pickuptime`) values ('$code','$pickdate','$picktime')");
			if($query)
	    {
	      echo "Succesfull booking";

	    }
	    else {
	      echo "failed ";
	    }
	}




}
?>



<html>
<head>
  <title>book form</title>
  <meta charset="utf-8">
<style>
    body{background: #fff}
      .form{padding: 20px;border-radius: 50px;width: 580px;margin:0 auto;}
      input{width: 500px;padding: 5px;background:#f9f7f5 }
      #submit{background:#625;width: 100px;font-weight: bold;font-size: 16px;color:#fff;border-radius: 10px;}
      h1{color:#625;text-align: center;font-family: cursive;}
      label{color:#625;}

    </style>


</head>
    <body>
       <div class="form">
       <h1>Book Now</h1>
       <form  method="post">
				 <label>Code Of Car</label><br>
         <input id="code" type="text" name="code" required><br><br>

         <label>City</label><br>
         <input id="city" type="text" name="city" required><br><br>



        <label>Pick-up date</label><br>
         <input id="pickdate" type="date" name="pickdate" required > <br><br>


           <label>Pick-up time</label><br>
            <input class="time" type="time"name="picktime"required >

          <br><br>

         <label> Drop-off date</label><br>
         <input id="dropdate" type="date"name="dropdate" required><br><br>


        <label>Drop-off time</label><br>
         <input class="time" type="time"name="droptime"required >



     <input name="submit" id="submit" type="submit" value="Ok" >
   </div>

       </form>





</body>
</html>
