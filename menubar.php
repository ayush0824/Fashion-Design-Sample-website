<?php
$pid=$_GET['pid'];


 ?>


<div class="menubar">	<!--menubar-->
  <a href="index.php?pid=1"><div class="menu <?php if($pid==""|| $pid=="1"){echo "currentpage";} ?>">Home</div></a>
  <a href="gallery.php?pid=2"><div class="menu <?php if($pid==2){echo "currentpage";} ?>">Gallery</div></a>
  <a href="news.php?pid=3"><div class="menu <?php if($pid==3){echo "currentpage";} ?>">News</div></a>
  <a href="blog.php?pid=4"><div class="menu <?php if($pid==4){echo "currentpage";} ?>">Blog</div></a>
  <a href="seo.php?pid=5"><div class="menu <?php if($pid==5){echo "currentpage";} ?>">SEO</div></a>
  <a href="aboutus.php?pid=6"><div class="menu <?php if($pid==6){echo "currentpage";} ?>">About Us</div></a>
  <a href="contactus.php?pid=7"><div class="menu <?php if($pid==7){echo "currentpage";} ?>" style="border-right: none;">Contact Us</div></a>
  <form method="post">
  <div class="search"><input type="text" name="searchtext" placeholder="Search" class="searchinput"><input type="submit" name="searchbutton" value="Search" class="searchbutton"></div>
  </form>
</div>	<!--/menubar-->