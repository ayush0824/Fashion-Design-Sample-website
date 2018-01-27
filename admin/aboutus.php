<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}



include("../config/connection.php");

if($_POST['update']=="Update")
{
  $imageNameCondition = '';
  if(!empty($_FILES['aimg']['name'])){
    $rand=rand(2,200000);//genrates random numbers
    $name=$rand.$_FILES['aimg']['name']; //gimg is form field name ['name'] is property of file
    $tmp_name=$_FILES['aimg']['tmp_name'];// nimage is form field name ['----'] property of file
    $path="../a_image/".$name;// newsimage is folder in main site
    move_uploaded_file($tmp_name, $path);// this is function
    $imageNameCondition = " ,aimg='".$name."'";
  }

  $upd="update aboutus set abouttext='".$_POST['abouttext']."'".$imageNameCondition." where id=1";
  mysqli_query($link, $upd);

  $msg="Successfull Updated";
}

$sel="select * from aboutus where id=1";
$exe=mysqli_query($link, $sel) or die("Query failed");
$fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC);

include "header.php";
?>
<div class="container">
	<div class="ctop">About Us</div>
  <div class="cmid">
  	<form method="post" enctype="multipart/form-data">    	
      	<div class="row">
          <lable style="margin-top:100px !important;">About Us</lable>
          <div class="input">
         		<textarea name="abouttext" placeholder="Enter About Text" cols="50" rows="15"><?php echo $fetch['abouttext']; ?></textarea>
          </div>
        </div>
        <div class="row">       <!--row-->
          <lable class="filelable">File</lable>
          <div class="input">
            <input type="file" name="aimg" />  
          </div>
        <div class="row">
          <lable class="filelable"></lable>
          <div class="input">
          	<input type="submit" name="update" value="Update" class="hupdate"  />  
          </div>
        </div>    
   	</form>
    <div style="clear:both;"></div>
  </div>
</div>       
<?php
include "footer.php";
?> 	