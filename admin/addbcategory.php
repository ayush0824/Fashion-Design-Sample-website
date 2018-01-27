<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}


include("../config/connection.php");         //connection

if($_POST['submit']=="Submit")
{
  $ins="insert into blogcategory set bcategory='".$_POST['bcategory']."'";    //insert query
  mysqli_query($link, $ins) or die("Query Failed");   //query execute
}

include "header.php";   //header
?>



<div class="container">   <!--container-->
	<div class="ctop">Add Blog Category</div>
  <div class="cmid">
  	<form method="post" onSubmit="onfill()">    <!--form-->   	
      	<div class="row">    <!--row-->
          <lable class="text">Add Blog Category</lable>
          <div class="input">
         		<input type="text" name="bcategory" id="bcategory" class="gtitle" placeholder="Enter Blog Category"> <star>*</star>
          </div>
        </div></br>   <!--/row-->
        <div class="row">   <!--row-->
          <lable class="filelable"></lable>
          <div class="input">
          	<input type="submit" name="submit" value="Submit" class="hupdate" onClick="return val()"  />  
          </div>
        </div>      <!--/row-->    
    </form>   <!--/form-->
    <div style="clear:both;"></div>
  </div>
</div>  <!--/container-->


<?php
include "footer.php";
?> 	
