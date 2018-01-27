<?php
$menu_id=$_GET['menu_id'];
?>

<ul type="none" class="leftmenus">    <!--lmenu-->
  <a href="dashbord.php?menu_id=1"><li class="btnlmenu <?php if($menu_id==""|| $menu_id=="1"){echo "currentpage";} ?>">Dashbord</li></a>
  <a href="home.php?menu_id=2"><li class="btnlmenu <?php if($menu_id==2){echo "currentpage";} ?>">Home</li></a>
  <a href="aboutus.php?menu_id=3"><li class="btnlmenu <?php if($menu_id==3){echo "currentpage";} ?>">About Us</li></a>
  <a href="addslider.php?menu_id=4"><li class="btnlmenu <?php if($menu_id==4){echo "currentpage";} ?>">Add slider</li></a>
  <a href="viewslider.php?menu_id=5"><li class="btnlmenu <?php if($menu_id==5){echo "currentpage";} ?>">View slider</li></a>
  <a href="addgallery.php?menu_id=6"><li class="btnlmenu <?php if($menu_id==6){echo "currentpage";} ?>">Add Gallery</li></a>
  <a href="viewgallery.php?menu_id=7"><li class="btnlmenu <?php if($menu_id==7){echo "currentpage";} ?>">View Gallery</li></a>
  <a href="addnews.php?menu_id=8"><li class="btnlmenu <?php if($menu_id==8){echo "currentpage";} ?>">Add News</li></a>
  <a href="viewnews.php?menu_id=9"><li class="btnlmenu <?php if($menu_id==9){echo "currentpage";} ?>">View News</li></a>
  <a href="addbcategory.php?menu_id=10"><li class="btnlmenu <?php if($menu_id==10){echo "currentpage";} ?>">Add Blog Ctegory</li></a>
  <a href="addblog.php?menu_id=11"><li class="btnlmenu <?php if($menu_id==11){echo "currentpage";} ?>">Add Blog</li></a>
  <a href="viewblog.php?menu_id=12"><li class="btnlmenu <?php if($menu_id==12){echo "currentpage";} ?>">View Blog</li></a>
  <a href="addseo.php?menu_id=13"><li class="btnlmenu <?php if($menu_id==13){echo "currentpage";} ?>">Add SEO</li></a>
  <a href="viewseo.php?menu_id=14"><li class="btnlmenu <?php if($menu_id==14){echo "currentpage";} ?>">View SEO</li></a>
  <a href="contactus.php?menu_id=15"><li class="btnlmenu <?php if($menu_id==15){echo "currentpage";} ?>">Contact Us</li></a>
  <a href="viewenquiry.php?menu_id=16"><li class="btnlmenu <?php if($menu_id==16){echo "currentpage";} ?>">View Enquiry</li></a>
  <a href="changepassword.php?menu_id=17"><li class="btnlmenu <?php if($menu_id==17){echo "currentpage";} ?>">Change Password</li></a>
  <a href="logout.php?menu_id=18"><li class="btnlmenu <?php if($menu_id==18){echo "currentpage";} ?>">Log Out</li></a>
</ul>   <!--/lmenu-->