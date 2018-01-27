<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}


include("../config/connection.php");


if($_POST['update']=="Update")
{

  $selcp="select * from user where id='".$_SESSION['sun_user']."'";
  $execp=mysqli_query($link,$selcp);
  $fetchcp=mysqli_fetch_array($execp, MYSQL_ASSOC);
  
  $op=$fetchcp['upass'];
  if($_POST['opass']!=$op)
  {
    $msg="Old password mismatch";
  }
  else
  { 
     if($_POST['npass']!=$_POST['cpass'])
      { $msg="Conform password is not correct";}
       else
        {  
          $updcp="update user set upass='".$_POST['npass']."' where id='".$_SESSION['sun_user']."'";
          $exeucp=mysqli_query($link,$updcp) or die ("Change password failed" );
          $msg="Password Successfully Changed";
        }
      }
  }




include "header.php";
?>




<div class="container">
	<div class="ctop">Change Password</div>
  <div class="cmid">
  	<form method="post" onSubmit="onfill()">    	
      	<div class="row">
          <lable class="text">Old Password</lable>
          <div class="input">
         		<input type="text" name="opass" class="gtitle" id="opass" placeholder="Enter Old Password"> <star>*</star>
          </div>
        </div> 
        <div class="row">
          <lable class="text">New Password</lable>
          <div class="input">
         		<input type="text" name="npass" class="gtitle" id="npass" placeholder="Enter New Password"> <star>*</star>
          </div>
        </div> 
        <div class="row">
          <lable class="text">Confirm Password</lable>
          <div class="input">
         		<input type="text" name="cpass" class="gtitle" id="cpass" placeholder="Enter Confirm Password"> <star>*</star>
          </div>
        </div> 
        <div class="row">
          <lable class="filelable"></lable>
          <div class="input">
          	<input type="submit" name="update" value="Update" class="hupdate" onClick="return val()"  />  
          </div>
          <div class="input"><?php echo $msg; ?></div>
        </div>    
    </form>
    <div style="clear:both;"></div>
  </div>
</div>       
<?php
include "footer.php";
?> 	
