<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}


include("../config/connection.php");         //connection
if($_GET['updid']!="")
{
  $selupd="select * from gallery where id ='".$_GET['updid']."' ";
  $exeupd=mysqli_query($link, $selupd);
  $fetchupd=mysqli_fetch_array($exeupd, MYSQLI_ASSOC);
  if($_POST['submit']=="Submit")
  {
    $imageNameCondition = '';
    if(!empty($_FILES['gimg']['name'])){
      $rand=rand(2,200000);//genrates random numbers
      $name=$rand.$_FILES['gimg']['name']; //gimg is form field name ['name'] is property of file
      $tmp_name=$_FILES['gimg']['tmp_name'];// nimage is form field name ['----'] property of file
      $path="../gallery_image/".$name;// newsimage is folder in main site    
      move_uploaded_file($tmp_name, $path);// this is function
      chmod($path, "0644");
      $imageNameCondition = " ,gimg='".$name."'";
    }

    $upd="update gallery set gtitle='". $_POST['gtitle']."'".$imageNameCondition.",gvisible='".$_POST['visible']."' where id='".$_GET['updid']."'";    //insert query
    mysqli_query($link, $upd) or die("Query Failed");       //query execute
    echo' <script>   window.location="viewgallery.php?menu_id=7" </script> ';
  }
}else {
  if($_POST['submit']=="Submit")
  {
    $rand=rand(2,200000);//genrates random numbers
    $name=$rand.$_FILES['gimg']['name']; //gimg is form field name ['name'] is property of file
    $tmp_name=$_FILES['gimg']['tmp_name'];// nimage is form field name ['----'] property of file
    $path="../gallery_image/".$name;// newsimage is folder in main site
    move_uploaded_file($tmp_name, $path);// this is function

    $ins="insert into gallery set gtitle='". $_POST['gtitle']."',gimg='".$name."', gvisible='".$_POST['visible']."'";
    mysqli_query($link, $ins) or die("Query Failed");
  }
}

$gtitle = "";
if(isset($fetchupd['gtitle']))
  $gtitle = $fetchupd['gtitle'];

$gvisible = 0;
if(!empty($fetchupd['gvisible']))
  $gvisible = 1;

include "header.php";
?>
<div class="container">
	<div class="ctop">Add Gallery</div>
  <div class="cmid">
  	<form method="post" enctype="multipart/form-data" onSubmit="onfill()">    	
      	<div class="row">
          <lable class="text">Gallery Image Title</lable>
          <div class="input">
         		<input type="text" name="gtitle" class="gtitle" id="gallery" placeholder="Enter Gallery Title" value="<?php echo $gtitle;?>" > <star>*</star>
          </div>
        </div>
        <br /><br /><br /><br />
        <div class="row">
          <lable class="filelable">File</lable>
          <div class="input">
          	<input type="file" name="gimg"/>  
          </div>
        </div>   
        <br /><br /><br />
        <div class="row">
          <lable class="filelable">Visible</lable>
          <div class="input">
          	<input type="radio" name="visible" value="0" class="file" <?php if ($gvisible==0){echo "checked"; }?> />  Hide
            <input type="radio" name="visible" value="1" class="file" <?php if ($gvisible==1){echo "checked"; }?> />  Show
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