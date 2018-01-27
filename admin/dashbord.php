<?php
session_start();
if($_SESSION['sun_user']=="")
{
	echo'<script> window.location="index.php" </script>';
}


include "header.php";
?>
<div class="container">
	<div class="ctop">Dashbord</div>
  <div class="cmid">
  	<img src="../images/pic05.jpg" width="100%" height="100%">
  </div>
</div>       
<?php
include "footer.php";
?> 	