<?php
include("config/connection.php");

if($_POST['searchbutton']=="Search")
{
	$pulak="where stitle like '%".$_POST['searchtext']."%'";
	
}


if($_GET['sid']=="")
{
$selseo="select * from seo $pulak order by id DESC";
$exeseo=mysqli_query($link, $selseo)or die("seo selection failed");
}
else
{
$selseo="select * from seo where id='".$_GET['sid']."'";
$exeseo=mysqli_query($link, $selseo) or die("seolatest selection failed");
}

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
				<p>Nunc imperdiet eros in libero pharetra sit amet euismod quam facilisis. Suspendisse at euismod lacus. Etiam a nulla at metus cursus lobortis at at nulla. Sed eget augue sed sapien interdum tristique.</p>
			</div>	<!--/galleryslider-->
			
			<div class="midhseo">		<!--midhseo-->

				<?php
					while($fetchseo=mysqli_fetch_array($exeseo, MYSQLI_ASSOC)){
				?>

				<div class="midseobox">			<!--midseobox-->
					<div class="midseohead"><?php echo $fetchseo['stitle']; ?></div>		<!--midseohead-->
					<div class="midseomatter">			<!--midseomatter-->
						<div class="midseoimg"><img src="seo_image/<?php echo $fetchseo['simg']; ?>" width="100%" height="100%"></div>
						<div class="midseotext"><?php echo $fetchseo['sdescr']; ?></div>
					</div>					<!--/midseomatter-->
				</div>				<!--/midseobox-->

				<?php
				}
				?>
				<a href="seo.php"><div class="p5" > View All</div> </a>
				<div style="clear: both;"></div>
			</div>			<!--/midhseo-->
			
					<?php include "footer.php"; ?>
		</div>	<!--/outer-->
	</body>
</html>