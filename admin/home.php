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
  if(!empty($_FILES['himg']['name'])){
    $rand=rand(2,200000);//genrates random numbers
    $name=$rand.$_FILES['himg']['name']; //gimg is form field name ['name'] is property of file
    $tmp_name=$_FILES['himg']['tmp_name'];// nimage is form field name ['----'] property of file
    $path="../home_image/".$name;// newsimage is folder in main site
    move_uploaded_file($tmp_name, $path);// this is function
    $imageNameCondition = " ,himg='".$name."'";
}

  $upd="update home set htext1='".$_POST['text1']."',htext2='".$_POST['text2']."'".$imageNameCondition." where id=1";
  mysqli_query($link, $upd);

 $msg="Successfull Updated";

}

$sel="select * from home where id=1";
$exe=mysqli_query($link, $sel) or die("Query failed");
$fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC);

include "header.php";

?>



<div class="container">		<!--container-->
	<div class="ctop">Home</div>	<!--ctop-->
  <div class="cmid">		<!--cmid-->
  	<form method="post" enctype="multipart/form-data">    	
      	<div class="row">		<!--row-->
          <lable>Home Text 1</lable>
          <div class="input">
         		<textarea name="text1" placeholder="Enter Text 1" cols="50" rows="6"><?php echo $fetch['htext1']; ?></textarea>
          </div>
        </div>	<!--/row-->
        <div class="row">		<!--row-->
          <lable>Home Text 2</lable>
          <div class="input">
          	<textarea name="text2" placeholder="Enter Text 2"  cols="50" rows="6"><?php echo $fetch['htext2']; ?></textarea>
          </div>
        </div>		<!--/row-->
        <div class="row">		<!--row-->
          <lable class="filelable">File</lable>
          <div class="input">
          	<input type="file" name="himg" class="file" />  
          </div>
        </div>   	<!--/row--> 
        <div class="row">		<!--row-->
          <lable class="filelable"></lable>
          <div class="input">
          	<input type="submit" name="update" value="Update" class="hupdate"  />  
          </div>
        </div> 		<!--/row-->   
    </form>
    <div style="clear:both;"></div>
  </div>	<!--cmid-->
</div> 		<!--/container-->      
<?php
include "footer.php";
?> 	