<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:index.php');

}
//echo $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcom Admin </h1>
     <a class="a1" href="logout.php">Logout</a>
     <a href="#">Add</a>
     <a href="#">delete</a>
     <a href="#">ubdate</a>

  </body>
</html>
