<?php
include("config/connection.php");

if($_POST['searchbutton']=="Search")
{
	$pulak="where stitle like '%".$_POST['searchtext']."%'";
	//$pulakk="btitle like '%".$_POST['searchtext']."%'";
}

$sel="select * from home where id=1";
$exe=mysqli_query($link, $sel) or die("Query home failed");
$fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC);

$selblog="select * from blog where bvisible=1 order by id DESC limit 0,3";
$exeblog=mysqli_query($link, $selblog) or die("Query failed");

$selseo="select * from seo $pulak order by id DESC limit 0,3";
$exeseo=mysqli_query($link, $selseo) or die("Query failed");

$selsl="select * from slider";
$exesl=mysqli_query($link, $selsl) or die("Query slider failed");
$fetchsl=mysqli_fetch_array($exesl, MYSQLI_ASSOC);

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
			<div class="slider">	<!--slider-->
				<div class="sliderleft">
					<h2 class="h2slider">Our Latest Projects</h2>
					<p class="pslider">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non ante eget nibh tincidunt consequat. Donec nec aliquet nulla. Pellentesque ut viverra lacus.
				</div>
				<div class="sliderright"><img src="slider_image/<?php echo $fetch['slimg'];  ?>" alt="Slider Image" width="100%" height="100%"></div>
				<div class="slidertext"><?php echo $fetch['sltitle'];  ?></div>
			</div>	<!--/slider-->
			
			
			<div class="mid">	<!--mid-->
			
				<?php
				while($fetchseo=mysqli_fetch_array($exeseo, MYSQLI_ASSOC)){
					if($fetchseo['svisible']==1)
   				{
				?>

				<div class="midleft">	<!--midleft-->
					<div class="lhead"><?php echo $fetchseo['stitle'];  ?></div>
					<img src="seo_image/<?php echo $fetchseo['simg'];  ?>" class="midimg">
					<div class="plmid">
						<p><?php echo $fetchseo['sdescr'];  ?></p>
					</div>



						<a href="seo.php?sid=<?php echo $fetchseo['id'];?>"><div class="middetails clear" >Details</div></a>
					
				</div>		<!--/midleft-->	


				<?php
				}
				}
				?>
				
			</div>	<!--/mid--><div class="midborder"></div>
			<div class="mid2">	<!--mid2-->
				

				<div class="mid2left">
					<div class="mid2head">Welcome to Sunflower</div>
					<div class="mid2img"><img src="home_image/<?php echo $fetch['himg'];  ?>" width="100%" height="100%"	alt="Image"></div>
					<div class="mid2p">
						<?php echo $fetch['htext1'];  ?>
					</div>
					<div class="mid2p2">
						<?php echo $fetch['htext2'];  ?>
					</div>
				</div>



				<div class="mid2right">			<!--mid2right-->
					<div class="mid2head">Latest Updates</div>
					
					<?php
					while($fetchblog=mysqli_fetch_array($exeblog, MYSQLI_ASSOC))
					{
						if($fetchblog['bvisible']==1)
					{
					?>

					<div class="mid2p2">
						<p style="color: #000;"><b><?php echo $fetchblog['date']; ?></b>
						<p style="color: #0e4369; font-size: 15px;"><?php echo $fetchblog['btitle']; ?></p>
						<a href="blog.php?bid=<?php echo $fetchblog['id'];?>">  <div class="elipsis"><?php echo $fetchblog['bsummary']; ?></div> </a>
					</div>	
					
					<?php
					}
					}
					?>
				</div>			<!--/mid2right-->

				<div style="clear: both;"> </div>


			</div>	<!--/mid2-->
			

			<?php include "footer.php"; ?>
		</div>	<!--/outer-->
	</body>
</html>