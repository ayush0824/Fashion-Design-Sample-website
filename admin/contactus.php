<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}


include("../config/connection.php");

if($_POST['update']=="Update"){
  $upd="update contactus set cperson='".$_POST['cperson']."',mnumber='".$_POST['mnumber']."',pnumber='".$_POST['pnumber']."',address='".$_POST['address']."',pincode='".$_POST['pincode']."',fax='".$_POST['fax']."',email='".$_POST['email']."' where id=1";
  mysqli_query($link, $upd);

  $msg="Successfull Updated";
}


$sel="select * from contactus where id=1";
$exe=mysqli_query($link, $sel) or die("Query failed");
$fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC);

include "header.php";
?>
<div class="container">
	<div class="ctop">Contact Us</div>
  <div class="cmid">
  	<form method="post" onSubmit="onfill()">    	
      	<div class="row">
          <lable class="text">Contact Person</lable>
          <div class="input">
         		<input type="text" name="cperson" class="gtitle" id="uname" placeholder="Enter Contact Person" value=<?php echo $fetch['cperson']; ?>> <star>*</star>
          </div>
        </div></br>
        <div class="row">
          <lable class="text">Phone Number</lable>
          <div class="input">
         		<input type="text" name="pnumber" class="gtitle" placeholder="Enter Phone Number" value=<?php echo $fetch['pnumber']; ?>>
          </div>
        </div></br>
        <div class="row">
          <lable class="text">Mobile Number</lable>
          <div class="input">
         		<input type="text" name="mnumber" class="gtitle" id="mobno" placeholder="Enter Mobile Number" value=<?php echo $fetch['mnumber']; ?>> <star>*</star>
          </div>
        </div></br>
        <div class="row">
          <lable>Address</lable>
          <div class="input">
         		<textarea name="address" style="border:1px solid #444; border-radius:5px;" placeholder="Enter Address" cols="45" rows="6"><?php echo $fetch['address']; ?></textarea>
          </div>
        </div></br>
        <div class="row">
          <lable class="text">Pin Code</lable>
          <div class="input">
         		<input type="text" name="pincode" class="gtitle" placeholder="Enter Pin Code" value=<?php echo $fetch['pincode']; ?>>
          </div>
        </div></br>
        <div class="row">
          <lable class="text">Fax</lable>
          <div class="input">
         		<input type="text" name="fax" class="gtitle" placeholder="Enter Fax Number" value=<?php echo $fetch['fax']; ?>>
          </div>
        </div></br>
        <div class="row">
          <lable class="text">Email</lable>
          <div class="input">
         		<input type="email" name="email" class="gtitle" id="uemail" placeholder="Enter email@mail.com" value=<?php echo $fetch['email']; ?>> <star>*</star>
          </div>
        </div></br>
        <div class="row">
          <lable class="filelable"></lable>
          <div class="input">
          	<input type="submit" name="update" value="Update" class="hupdate" onClick="return val()"  />  
          </div>
        </div>    
    </form>
    <div style="clear:both;"></div>
  </div>
</div>       
<?php
include "footer.php";
?> 	
