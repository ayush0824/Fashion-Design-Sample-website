<?php
include("../config/connection.php");

if($_POST['login']=="Login")
{
   $sel="select * from user where uname='".$_POST['uname']."' and upass='".$_POST['upass']."'" or die("Table user not Found");
   $exe=mysqli_query($link,$sel) or die("Select Query fail");
   $fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC);
   $tot=mysqli_num_rows($exe);

   if($tot==1)
  {
     session_start();
     $_SESSION['sun_user']=$fetch['id'];
     echo'<script> window.location="dashbord.php" </script>';
  }
   else
    $msg="Invalid user name or password";
}


?>




<html>
	
  <head>
  	<title>Admin Panel</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
  </head>
  
  <body class="loginbody">
  	<div class="login">		<!--login-->
    	<div class="border">
      	<br>
        <h1 class="h1">Wel-Come To Admin Panel</h1>
        <h4 class="h4">Please Login with your Username and password.</h4>
        <br><br>
        <form method="post">
          <div class="box"><i class="fa fa-user"></i><input type="text" name="uname" placeholder="Username" class="input"></div>
          <div class="box"><i class="fa fa-lock"></i><input type="password" name="upass" placeholder="Password" class="input"></div>
          <br><br>
          <div><input type="submit" name="login" value="Login" class="btnlogin"></div>
          <br><br>
          <div style="margin:0 0 30px 130px;"><?php echo "$msg";   ?></div>
        </form>
      </div>
    </div>		<!--/login-->
  </body>
  
</html>