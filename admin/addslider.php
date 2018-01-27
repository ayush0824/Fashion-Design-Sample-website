<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}


include("../config/connection.php");         //connection
if($_GET['updid']!="")
{
  $selupd="select * from slider where id ='".$_GET['updid']."' ";
  $exeupd=mysqli_query($link, $selupd);
  $fetchupd=mysqli_fetch_array($exeupd, MYSQLI_ASSOC);
  if($_POST['submit']=="Submit")
  {
    $imageNameCondition = '';
    if(!empty($_FILES['slimg']['name'])){
      $rand=rand(2,200000);//genrates random numbers
      $name=$rand.$_FILES['slimg']['name']; //gimg is form field name ['name'] is property of file
      $tmp_name=$_FILES['slimg']['tmp_name'];// nimage is form field name ['----'] property of file
      $path="../slider_image/".$name;// newsimage is folder in main site    
      move_uploaded_file($tmp_name, $path);// this is function
      chmod($path, "0644");
      $imageNameCondition = " ,slimg='".$name."'";
    }

    $upd="update gallery set sltitle='". $_POST['sltitle']."'".$imageNameCondition.",slvisible='".$_POST['visible']."' where id='".$_GET['updid']."'";    //insert query
    mysqli_query($link, $upd) or die("Query Failed");       //query execute
    echo' <script>   window.location="viewslider.php?menu_id=5" </script> ';
  }
}else {
  if($_POST['submit']=="Submit")
  {
    $rand=rand(2,200000);//genrates random numbers
    $name=$rand.$_FILES['slimg']['name']; //gimg is form field name ['name'] is property of file
    $tmp_name=$_FILES['slimg']['tmp_name'];// nimage is form field name ['----'] property of file
    $path="../slider_image/".$name;// newsimage is folder in main site
    move_uploaded_file($tmp_name, $path);// this is function

    $ins="insert into slider set sltitle='". $_POST['sltitle']."',slimg='".$name."', slvisible='".$_POST['visible']."'";
    mysqli_query($link, $ins) or die("Query Failed");
  }
}

$sltitle = "";
if(isset($fetchupd['sltitle']))
  $sltitle = $fetchupd['sltitle'];

$slvisible = 0;
if(!empty($fetchupd['slvisible']))
  $slvisible = 1;

include "header.php";
?>
<div class="container">
	<div class="ctop">Add Slider</div>
  <div class="cmid">
  	<form method="post" enctype="multipart/form-data" onSubmit="onfill()">    	
      	<div class="row">
          <lable class="text">Slider Image Title</lable>
          <div class="input">
         		<input type="text" name="sltitle" class="gtitle" id="slider" placeholder="Enter Slider Title" value="<?php echo $sltitle;?>" > <star>*</star>
          </div>
        </div>
        <br /><br /><br /><br />
        <div class="row">
          <lable class="filelable">File</lable>
          <div class="input">
          	<input type="file" name="slimg"/>  
          </div>
        </div>   
        <br /><br /><br />
        <div class="row">
          <lable class="filelable">Visible</lable>
          <div class="input">
          	<input type="radio" name="visible" value="0" class="file" <?php if ($slvisible==0){echo "checked"; }?> />  Hide
            <input type="radio" name="visible" value="1" class="file" <?php if ($slvisible==1){echo "checked"; }?> />  Show
          </div>
        </div> 
        <div class="row">
          <lable class="filelable"></lable>
          <div class="input">
          	<input type="submit" name="submit" value="Submit" class="hupdate" onClick="return val()"  />  
          </div>
        </div>    
    </form>
    <div style="clear:both;"></div>
  </div>
</div>       
<?php
include "footer.php";
?> 	