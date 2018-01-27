<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}


include("../config/connection.php");         //connection

if($_GET['updid']!="")
{
  $selupd="select * from blog where id ='".$_GET['updid']."' ";
  $exeupd=mysqli_query($link, $selupd);
  $fetchupd=mysqli_fetch_array($exeupd, MYSQLI_ASSOC);
  if($_POST['submit']=="Submit")
  {
    $imageNameCondition = '';
    if(!empty($_FILES['bimg']['name'])){
      $rand=rand(2,200000);//genrates random numbers
      $name=$rand.$_FILES['bimg']['name']; //gimg is form field name ['name'] is property of file
      $tmp_name=$_FILES['bimg']['tmp_name'];// nimage is form field name ['----'] property of file
      $path="../blog_image/".$name;// newsimage is folder in main site    
      move_uploaded_file($tmp_name, $path);// this is function
      chmod($path, "0644");
      $imageNameCondition = " ,bimg='".$name."'";
    }

    $upd="update blog set bcategory='".$_POST['bcategory']."',btitle='".$_POST['btitle']."'".$imageNameCondition.",bvisible='".$_POST['visible']."',bcontent='".$_POST['bcontent']."',bsummary='".$_POST['bsummary']."' where id='".$_GET['updid']."'";    //insert query
    mysqli_query($link, $upd) or die("Query Failed");       //query execute
    echo '<script>   window.location="viewblog.php?menu_id=12"  </script>';
  }
}else {
  if($_POST['submit']=="Submit")            //insert query
  {
    $rand=rand(2,200000);//genrates random numbers
    $name=$rand.$_FILES['bimg']['name']; //gimg is form field name ['name'] is property of file
    $tmp_name=$_FILES['bimg']['tmp_name'];// nimage is form field name ['----'] property of file
    $path="../blog_image/".$name;// newsimage is folder in main site
    move_uploaded_file($tmp_name, $path);// this is function

    $ins="insert into blog set bcategory='".$_POST['bcategory']."',btitle='".$_POST['btitle']."',bimg='".$name."',bvisible='".$_POST['visible']."',bcontent='".$_POST['bcontent']."',bsummary='".$_POST['bsummary']."' ";
    mysqli_query($link, $ins) or die("Query Failed");
  }
}

$bcategory = "";
if(isset($fetchupd['bcategory']))
  $bcategory = $fetchupd['bcategory'];

$btitle = "";
if(isset($fetchupd['btitle']))
  $btitle = $fetchupd['btitle'];

$bcontent = "";
if(isset($fetchupd['bcontent']))
  $bcontent = $fetchupd['bcontent'];

$bsummary = "";
if(isset($fetchupd['bsummary']))
  $bsummary = $fetchupd['bsummary'];

$bvisible = 0;
if(!empty($fetchupd['bvisible']))
  $bvisible = 1;

$sel="select * from blogcategory";                //select query
$exe=mysqli_query($link, $sel) or die("Query failed");

include "header.php";
?>
<div class="container">
	<div class="ctop">Add Blog</div>
  <div class="cmid">
  	<form method="post" enctype="multipart/form-data" onSubmit="onfill()">   	
      	<div class="row">
          <lable class="text">Blog Category</lable>
          <div class="input">
         		<select name="bcategory" style="width:60%; height:7%; border-radius:5px; border:1px solid #444; background-color:#999; color:#fff;">
            	<option value="0">Select a Category</option>
              <?php 
                while($fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC))
              {
              ?>
                <option value="<?php echo $fetch['id'];?>" <?php echo ($bcategory==$fetch['id']) ? "selected" : ""; ?>> <?php echo $fetch['bcategory'];?> </option>
              <?php 
              }
              ?>
            </select>
          </div>
        </div>
        </br></br></br>
        <div class="row">
          <lable class="text">Blog Title</lable>
          <div class="input">
         		<input type="text" name="btitle" class="gtitle" id="btitle" placeholder="Enter Blog Title" value="<?php echo $btitle;?>"> <star>*</star>
          </div>
        </div>
        </br></br></br>
        <div class="row">
          <lable class="text">Blog Summary</lable>
          <div class="input">
         		<input type="text" name="bsummary" class="gtitle" placeholder="Enter Blog Summary" value="<?php echo $bsummary;?>">
          </div>
        </div>
        </br></br></br>
        <div class="row">
          <lable class="text">Blog Content</lable>
          <div class="input">
         		<input type="text" name="bcontent" class="gtitle" placeholder="Enter Blog Content" value="<?php echo $bcontent;?>">
          </div>
        </div>
        </br></br></br>
        <div class="row">
          <lable class="filelable">File</lable>
          <div class="input">
          	<input type="file" name="bimg" />  
          </div>
        </div>   
        </br></br>
        <div class="row">
          <lable class="filelable">Visible</lable>
          <div class="input">
          	<input type="radio" name="visible" value="0" class="file" <?php if ($bvisible==0){echo "checked"; }?> />  Hide
            <input type="radio" name="visible" value="1" class="file" <?php if ($bvisible==1){echo "checked"; }?> />  Show
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