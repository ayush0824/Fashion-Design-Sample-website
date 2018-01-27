<?php
session_start();
if($_SESSION['sun_user']=="")
{
  echo'<script> window.location="index.php" </script>';
}



include("../config/connection.php");

$end=3;  // No of record
$next=$_GET['page']+1;
$prev=$_GET['page']-1;
$start=$_GET['page'] * $end;

if($_GET['delid']!="")
{
 $del="delete from enquiry where id='".$_GET['delid']."'";
 mysqli_query($link, $del) or die ("Delete query failed "); 
$msg="Delete successfulll";
}

//Multiple delete
if($_POST['delete']=="Delete")
{
 $tot=count($_POST['chk']);
 for($a=0;$a<$tot;$a++)
 {
  $mdel="delete from enquiry where id='".$_POST['chk'][$a]."'"; 
  mysqli_query($link,$mdel) or die("Multiple delete fail");
 }
}



$selenq="select * from enquiry order by id ASC  limit $start, $end";
$exeenq=mysqli_query($link, $selenq)or die("blog selection failed");
$isshow=mysqli_num_rows($exeenq);

include "header.php";
?>
<div class="container">		<!--container-->
	<div class="ctop">View Enquiry</div>		<!--ctop-->
  <form method="post">
    <div class="cmid">		<!--cmid-->
    	<div class="viewsun">		<!--viewsun-->
      	<div style="width:80px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
      		<div><a href="#"><div><input type="submit" name="delete" value="Delete" class="w122"></div></a></div>
        </div>
        <div style="width:57px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
        	<div class="w101">S.No.</div>
        </div>
        <div style="width:137px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div class="w161">Person Name</div>
        </div>
        <div style="width:172px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div class="w160">Message</div>
        </div>
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div class="w120">Email</div>
        </div>
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div class="w120">Date</div>
        </div>
        <div style="width:112px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div class="w100">Contact No.</div>
        </div>
        <div style="width:162px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div class="w150">Action</div>
        </div>
      </div><br />		<!--/viewsun-->
      
      <?php
      if($isshow>0){
      $sno=1; 
      while($fetchenq=mysqli_fetch_array($exeenq, MYSQLI_ASSOC))
      {
      ?>

      <div class="viewsun">		<!--viewsun-->
      	<div style="width:80px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
      		<div style="width:70px; height:38px; border:1px solid #444; margin:5px 5px 0px 5px;"><input type="checkbox" class="w1203" name="chk[]"  value="<?php echo $fetchenq['id'];?>" /></div>
        </div>
        <div style="width:57px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
        	<div><input type="text" name="s.no." class="w1004" value="<?php echo $sno++ ;?>" /></div>
        </div>
        <div style="width:137px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div><input type="text" name="cperson" class="w1603" value="<?php echo $fetchenq['cperson'];?>" /></div>
        </div>
        <div style="width:172px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div><input type="text" name="cmessage" class="w1602" value="<?php echo $fetchenq['cmessage'];?>" /></div>
        </div>
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div><input type="email" name="email" class="w123" value="<?php echo $fetchenq['email'];?>" /></div>
        </div>
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div><input type="text" name="date" class="w1201" value="<?php echo $fetchenq['date'];?>" /></div>
        </div>
        <div style="width:112px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div><input type="text" name="contactno." class="w1003" value="<?php echo $fetchenq['contactno'];?>" /></div>
        </div>
        <div style="width:162px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
  	      <div>
          	<div class="w16843">
            	<a href="viewenquiry.php?delid=<?php echo $fetchenq['id'];?>" onclick="return del();"><div style="margin-left:10px; color:#fff;">Delete</div></a>
            </div>
          </div>
        </div>
      </div>		<!--/viewsun-->
      
      <?php
      }
      ?>

      <div> <blue><?php echo $msg; ?></blue></div>

      <div class="pagging"> 
    <?php if($_GET['page']==0) 
        {
              echo 'First Prev';
         }
      else
      {

?>
      <a href="viewenquiry.php?page=0">First</a>
      <a href="viewenquiry.php?page=<?php echo $prev;?>">Prev</a>
        <?php } ?>
              
      <?php
      $sel_pag="select * from enquiry";
      $exe_pag=mysqli_query($link,$sel_pag) or die ("page selection failed");
      $tot_rec=mysqli_num_rows($exe_pag);// no of records
       
      $final_tot=ceil($tot_rec/$end);
      for($a=0; $a<$final_tot; $a++)
      {
      ?>
      <a href="viewenquiry.php?page=<?php echo $a;?>"> <span class="circle"><?php echo $a+1;?></span></a>
      <?php
      }
      ?>

  <?php 
   if($_GET['page']==$final_tot-1)
   {
  
  ?>
  Next Last
  <?php 
  }
  else
  {
  ?>



      <a href="viewenquiry.php?page=<?php echo $next;?>">Next</a>
      <a href="viewenquiry.php?page=<?php echo $final_tot-1;?>">Last</a>
      
      
<?php } 


} 
      else
      {
         echo " Sorry there are no record ............... ! .."; 
      }
      ?>
        </div>

      <div style="clear:both;"></div>
    </div>	<!--/cmid-->
  </form>
</div>  	<!--/container-->     
<?php
include "footer.php";
?> 	