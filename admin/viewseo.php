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
 $seld="select * from seo where id='".$_GET['delid']."'";
 $exed=mysqli_query($link,$seld) or die("select query fail..");  ;
 $fetchd=mysqli_fetch_array($exed, MYSQLI_ASSOC);
 $pathd="../seo_image/".$fetchd['simg'];
 unlink($pathd);

 $del="delete from seo where id='".$_GET['delid']."'";
 mysqli_query($link, $del) or die ("Delete query failed "); 
$msg="Delete successfulll";
}

//Multiple delete
if($_POST['delete']=="Delete")
{
 $tot=count($_POST['chk']);
 for($a=0;$a<$tot;$a++)
 {
  $seld="select * from seo where id='".$_POST['chk'][$a]."'";
  $exed=mysqli_query($link,$seld) or die("select query fail..");  ;
  $fetchd=mysqli_fetch_array($exed, MYSQLI_ASSOC);
  $pathd="../seo_image/".$fetchd['simg'];
  unlink($pathd);

  $mdel="delete from seo where id='".$_POST['chk'][$a]."'"; 
  mysqli_query($link,$mdel) or die("Multiple delete fail");
 }
}



$selseo="select * from seo order by id ASC  limit $start, $end";
$exeseo=mysqli_query($link, $selseo)or die("seo selection failed");
$isshow=mysqli_num_rows($exeseo);

include "header.php";
?>
<div class="container">   <!--container-->
  <div class="ctop">View SEO</div>   <!--ctop-->
  <form method="post">
    <div class="cmid">    <!--cmid-->
      <div class="viewsun">   <!--viewsun-->
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <a href="#"><div><input type="submit" name="delete" value="Delete" class="w121"></div></a>
        </div>
        <div style="width:113px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div class="w100">S.No.</div>
        </div>
        <div style="width:172px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div class="w160">SEO Title</div>
        </div>
        <div style="width:172px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div class="w160">Image Description</div>
        </div>
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div class="w120">Date</div>
        </div>
        <div style="width:112px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div class="w100">Visible</div>
        </div>
        <div style="width:162px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div class="w150">Action</div>
        </div>
      </div><br />    <!--/viewsun-->

      <?php 
      if($isshow>0){
      $sno=1;
      while($fetchseo=mysqli_fetch_array($exeseo, MYSQLI_ASSOC))
      {
      ?>
      
      <div class="viewsun">   <!--viewsun-->
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div style="width:120px; height:38px; border:1px solid #444; margin:5px 5px 0px 5px;"><input type="checkbox" class="w1202" name="chk[]"  value="<?php echo $fetchseo['id'];?>" /></div>
        </div>
        <div style="width:113px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div><input type="text" name="s.no." class="w1003" value="<?php echo $sno++ ;?>"/></div>
        </div>
        <div style="width:172px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div><input type="text" name="stitle" class="w1602" value="<?php echo $fetchseo['stitle'];?>"/></div>
        </div>
        <div style="width:172px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div><img src="../seo_image/<?php echo $fetchseo['simg'];?>" width="100%" height="100%" class="w1601" /></div>
        </div>
        <div style="width:132px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div><input type="text" name="date" class="w1201" value="<?php echo $fetchseo['date'];?>"/></div>
        </div>
        <div style="width:112px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div><input type="text" name="visible." class="w1003" value="<?php if($fetchseo['svisible']==1) {echo"Show";} else echo "Hide"; ?>"/></div>
        </div>
        <div style="width:162px; height:50px; border:1px solid #444; float:left; margin-left:2px;">
          <div>
            <div class="w16842">
              <a href="addseo.php?menu_id=11&updid=<?php echo $fetchseo['id']; ?>"><div style="float:left; margin-left:20px; color:#fff;">Edit</div></i></a>
            </div>
            <div class="w16842">
              <a href="viewseo.php?delid=<?php echo $fetchseo['id'];?>" onclick="return del();"><div style="float:left; margin-left:10px; color:#fff;">Delete</div></a>
            </div>
          </div>
        </div>
      </div>    <!--/viewsun-->
      
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
      <a href="viewseo.php?page=0">First</a>
      <a href="viewseo.php?page=<?php echo $prev;?>">Prev</a>
        <?php } ?>
              
      <?php
      $sel_pag="select * from seo";
      $exe_pag=mysqli_query($link,$sel_pag) or die ("page selection failed");
      $tot_rec=mysqli_num_rows($exe_pag);// no of records
       
      $final_tot=ceil($tot_rec/$end);
      for($a=0; $a<$final_tot; $a++)
      {
      ?>
      <a href="viewseo.php?page=<?php echo $a;?>"> <span class="circle"><?php echo $a+1;?></span></a>
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



      <a href="viewseo.php?page=<?php echo $next;?>">Next</a>
      <a href="viewseo.php?page=<?php echo $final_tot-1;?>">Last</a>
      
      
<?php } 


} 
      else
      {
         echo " Sorry there are no record ............... ! .."; 
      }
      ?>
        </div>
       
      <div style="clear:both;"></div>
    </div>  <!--/cmid-->
  </form>
</div>    <!--/container-->     
<?php
include "footer.php";
?>  