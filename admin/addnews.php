<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}


include("../config/connection.php");         //connection

if($_GET['updid']!="")
{
  $selupd="select * from news where id ='".$_GET['updid']."' ";
  $exeupd=mysqli_query($link, $selupd);
  $fetchupd=mysqli_fetch_array($exeupd, MYSQLI_ASSOC);
  if($_POST['submit']=="Submit")
  {
    $imageNameCondition = '';
    if(!empty($_FILES['nimg']['name'])){
      $rand=rand(2,200000);//genrates random numbers
      $name=$rand.$_FILES['nimg']['name']; //gimg is form field name ['name'] is property of file
      $tmp_name=$_FILES['nimg']['tmp_name'];// nimage is form field name ['----'] property of file
      $path="../news_image/".$name;// newsimage is folder in main site    
      move_uploaded_file($tmp_name, $path);// this is function
      chmod($path, "0644");
      $imageNameCondition = " ,nimg='".$name."'";
    }

    $upd="update news set ntitle='".$_POST['ntitle']."',ndescr='".$_POST['ndescr']."'".$imageNameCondition.", nvisible='".$_POST['visible']."' where id='".$_GET['updid']."'";    //insert query
    mysqli_query($link, $upd) or die("Query Failed");       //query execute
    echo'  <script>   window.location="viewnews.php?menu_id=9"      </script>     ';
  }
}else {
  if($_POST['submit']=="Submit"){
    $rand=rand(2,200000);//genrates random numbers
    $name=$rand.$_FILES['nimg']['name']; //gimg is form field name ['name'] is property of file
    $tmp_name=$_FILES['nimg']['tmp_name'];// nimage is form field name ['----'] property of file
    $path="../news_image/".$name;// newsimage is folder in main site
    move_uploaded_file($tmp_name, $path);// this is function

    $ins="insert into news set ntitle='".$_POST['ntitle']."',ndescr='".$_POST['ndescr']."',nimg='".$name."', nvisible='".$_POST['visible']."'";    //insert query
    //echo $ins;exit;
    mysqli_query($link, $ins) or die("Query Failed");       //query execute
  }
}

$ntitle = "";
if(isset($fetchupd['ntitle']))
  $ntitle = $fetchupd['ntitle'];

$ndescr = "";
if(isset($fetchupd['ndescr']))
  $ndescr = $fetchupd['ndescr'];

$nvisible = 0;
if(!empty($fetchupd['nvisible']))
  $nvisible = 1;

include "header.php";       //header
?>
<div class="container">         <!--container-->
	<div class="ctop">Add News</div>
  <div class="cmid">      <!--cmid-->
  	<form method="post" enctype="multipart/form-data" onSubmit="onfill()">     <!--form-->   	
      	<div class="row">    <!--row-->
          <lable class="text">News Title</lable>
          <div class="input">
         		<input type="text" name="ntitle" value="<?php echo $ntitle;?>" id="ntitle" class="gtitle" placeholder="Enter News Title"> <star>*</star>
          </div>
        </div><br /><br /><br /><br />      <!--/row-->
        <div class="row">       <!--row-->
          <lable>News Description</lable>
          <div class="input">
         		<textarea name="ndescr" style="border:1px solid #444; border-radius:5px;"  placeholder="Enter Description" cols="45" rows="6"><?php echo $ndescr;?></textarea>
          </div>
        </div><br /><br /><br /><br /><br /><br /><br /><br />      <!--/row-->
        <div class="row">       <!--row-->
          <lable class="filelable">File</lable>
          <div class="input">
          	<input type="file" name="nimg" />  
          </div>
        </div><br /><br /><br />        <!--/row-->
        <div class="row">       <!--row-->
          <lable class="filelable">Visible</lable>
          <div class="input">
          	<input type="radio" name="visible" value="0" class="file" <?php if ($nvisible==0){echo "checked"; }?> />  Hide
            <input type="radio" name="visible" value="1" class="file" <?php if ($nvisible==1){echo "checked"; }?> />  Show
          </div>
        </div>    <!--/row-->
        <div class="row">       <!--row-->
          <lable class="filelable"></lable>
          <div class="input">
          	<input type="submit" name="submit" value="Submit" class="hupdate" onClick="return val()"  />  
          </div>
        </div>        <!--/row-->  
    </form>       <!--/form-->
    <div style="clear:both;"></div>
  </div>    <!--/cmid-->
</div>      <!--/container-->    


<?php
include "footer.php";
?> 	
