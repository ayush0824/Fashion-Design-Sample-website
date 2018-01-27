<?php 
include("config/connection.php");

if($_POST['searchbutton']=="Search")
{
	$pulak="where ntitle like '%".$_POST['searchtext']."%'";
	
}

$sel="select * from news $pulak order by id DESC";
$exe=mysqli_query($link, $sel)or die("news selection failed");

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
				<h2 class="h3slider">Latest News</h2>
				<p>Nunc imperdiet eros in libero pharetra sit amet euismod quam facilisis. Suspendisse at euismod lacus. Etiam a nulla at metus cursus lobortis at at nulla. Sed eget augue sed sapien interdum tristique.</p>
			</div>	<!--/galleryslider-->
			
                <div class="midnews"> <!--midgallery-->
                        <?php
                        while($fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC)){  
	                        if($fetch['nvisible']==1)
						{                                 
                        ?>

<div>
			<div class="midnewsleft"> <img src="news_image/<?php echo $fetch['nimg']; ?>" width="100%" height="150" ></div>
        	<div class="midnewsright">
        		<div class="midnewshead"><?php echo $fetch['ntitle']; ?></div>
        		<p style="font-size: 13px; color: #000;"><b><?php echo $fetch['date']; ?></b></p>
        		<p><?php echo $fetch['ndescr']; ?></p>
        		<p style="color: #c3d235" class="midmore"><b>More</b></p>
       		</div>
        		<div style="clear: both;"></div>
</div>   		
        		<?php
        		}
                }
                ?>
     

        		<div style="clear: both;"></div>
	        </div> <!--/midgallery-->
			
					<?php include "footer.php"; ?>
		</div>	<!--/outer-->
	</body>
</html>