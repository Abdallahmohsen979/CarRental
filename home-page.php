<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:index.php');

}
//echo $_SESSION['user'];
?>


<html>
<head>
  <title>home page</title>
  <meta charset="utf-8">
<style>
    body{background-image: url("asdd.jpg");background-size: cover;}
    .div1{margin-top: 50px;}
    .a1{   margin-top: 20px; margin: 10px ;margin-left: 50px;background: white;padding: 10px;color: black}
   a:link {
     width: 20px;
     height: 10px;
     font-size: 24px;
    color: black;
    background-color:  ;
    text-decoration: none;
    }

   a:hover {
    color: white;
    background-color: transparent;
    text-decoration: none;
   }

    a:active {
    color: black;
    background-color: transparent;
    text-decoration: underline;
        }



</style>
</head>
       <body>

           <div class="div1" >
                        <a class="a1" href="small.html">Smallcars</a>
                        <a class="a1" href="medium.html">Medium cars</a>
                        <a class="a1" href="large.html">Large cars</a>
                        <a class="a1" href="people.html">People carriers</a>
                        <a class="a1" href="suvs.html">Suvs</a>
											  <a class="a1" href="logout.php">Logout</a>


              </table>
           </div>

      </body>
</html>
