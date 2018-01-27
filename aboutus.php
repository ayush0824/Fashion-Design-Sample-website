<?php
include("config/connection.php");

$sel="select * from aboutus where id=1";
$exe=mysqli_query($link, $sel) or die("Query failed");
$fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC);
?>



<html>
	<head>
		<title>Sunflower</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="outer">	<!--outer-->
			<?php
				include "header.php";
				include "menubar.php";
			?>
			<div class="galleryslider">	<!--galleryslider-->
				<h2 class="h3slider">About Us</h2>
				<p>Nunc imperdiet eros in libero pharetra sit amet euismod quam facilisis. Suspendisse at euismod lacus. Etiam a nulla at metus cursus lobortis at at nulla. Sed eget augue sed sapien interdum tristique.
			</div>	<!--/galleryslider-->
			<div class="midnews"> <!--midgallery-->
					<div class="midaboutimgleft"><img src="a_image/<?php echo $fetch['aimg']; ?>" width="100%" height="100%"></div>
	                <div class="midnewsright">
        			<div class="midabouthead">About Sun-Flowers</div>
        			<p><?php echo $fetch['abouttext']; ?></p>
        		</div>
        		
        		<div style="clear: both;"></div>
	        </div> <!--/midgallery-->
			
					<?php include "footer.php"; ?>
		</div>	<!--/outer-->
	</body>
</html>