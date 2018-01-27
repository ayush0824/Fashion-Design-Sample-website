<?php 
include("config/connection.php");

if($_POST['searchbutton']=="Search")
{
	$pulak="where gtitle like '%".$_POST['searchtext']."%'";
	
}

$sel="select * from gallery $pulak";
$exe=mysqli_query($link, $sel)or die("gallery selection failed");
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
				<h2 class="h3slider">Photo Gallery</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non ante eget nibh tincidunt consequat. Ut molestie leo non lorem consequat at varius arcu commodo. Donec nec aliquet nulla. Validate <a href="#">XHTML</a> and <a href="#">CSS.</a>
			</div>	<!--/galleryslider-->

			<div class="midgallery"> <!--midgallery-->

				<?php
				while($fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC)){
					if($fetch['gvisible']==1)
					{					
					?>
	        		<div class="midbox">
	        			<div class="midgalleryhead"><?php echo $fetch['gtitle']; ?></div>
	        			<div class="midgalleryimg"><img src="gallery_image/<?php echo $fetch['gimg'] ?>" width="100%" height="100%"></div>
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