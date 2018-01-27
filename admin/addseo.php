<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}



include("../config/connection.php");         //connection
  
if($_GET['updid']!="")
{
  $selupd="select * from seo where id ='".$_GET['updid']."' ";
  $exeupd=mysqli_query($link, $selupd);
  $fetchupd=mysqli_fetch_array($exeupd, MYSQLI_ASSOC);
  if($_POST['submit']=="Submit")
  {
    $imageNameCondition = '';
    if(!empty($_FILES['simg']['name'])){
      $rand=rand(2,200000);//genrates random numbers
      $name=$rand.$_FILES['simg']['name']; //gimg is form field name ['name'] is property of file
      $tmp_name=$_FILES['simg']['tmp_name'];// nimage is form field name ['----'] property of file
      $path="../seo_image/".$name;// newsimage is folder in main site    
      move_uploaded_file($tmp_name, $path);// this is function
      chmod($path, "0644");
      $imageNameCondition = " ,simg='".$name."'";
    }

    $upd="update seo set stitle='".$_POST['stitle']."',sdescr='".$_POST['sdescr']."'".$imageNameCondition.",svisible='".$_POST['visible']."' where id='".$_GET['updid']."'";    //insert query
    mysqli_query($link, $upd) or die("Query Failed");       //query execute
    echo '<script>   window.location="viewseo.php?menu_id=14"  </script>';
  }
}else {
  if($_POST['submit']=="Submit")
  {
    $rand=rand(2,200000);//genrates random numbers
    $name=$rand.$_FILES['simg']['name']; //gimg is form field name ['name'] is property of file
    $tmp_name=$_FILES['simg']['tmp_name'];// nimage is form field name ['----'] property of file
    $path="../seo_image/".$name;// newsimage is folder in main site
    move_uploaded_file($tmp_name, $path);// this is function


    $ins="insert into seo set stitle='".$_POST['stitle']."',sdescr='".$_POST['sdescr']."',simg='".$name."',svisible='".$_POST['visible']."'";

    mysqli_query($link, $ins) or die("Query Failed");
  }
}

$stitle = "";
if(isset($fetchupd['stitle']))
  $stitle = $fetchupd['stitle'];

$sdescr = "";
if(isset($fetchupd['sdescr']))
  $sdescr = $fetchupd['sdescr'];

$svisible = 0;
if(!empty($fetchupd['svisible']))
  $svisible = 1;

include "header.php";
?>
<div class="container">
	<div class="ctop">Add SEO</div>
  <div class="cmid">


  	<form method="post" enctype="multipart/form-data" onSubmit="onfill()">    	
      	<div class="row">
          <lable class="text">SEO Title</lable>
          <div class="input">
         		<input type="text" name="stitle" class="gtitle" id="stitle" placeholder="Enter SEO Title" value="<?php echo $stitle;?>"> <star>*</star>
          </div>
        </div>
  
        <div class="row">
          <lable>SEO Description</lable>
          <div class="input">
         		<textarea name="sdescr" placeholder="Enter SEO Description" cols="45" rows="6" style="border:1px solid #444; border-radius:5px;"><?php echo $sdescr;?></textarea>
          </div>
        </div>
        <div class="row">
          <lable class="filelable">SEO Image</lable>
          <div class="input">
          	<input type="file" name="simg" class="file" />  
          </div>
        </div> 
        <div class="row">
          <lable class="filelable">Visible</lable>
          <div class="input">
            <input type="radio" name="visible" value="0" class="file" <?php if ($svisible==0){echo "checked"; }?> />  Hide
            <input type="radio" name="visible" value="1" class="file" <?php if ($svisible==1){echo "checked"; }?> />  Show
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