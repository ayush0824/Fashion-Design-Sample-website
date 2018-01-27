<?php 
include("config/connection.php");

$condition=" WHERE bvisible=1 ";
if(isset($_GET['bcatid'])){
	$condition .=" AND bcategory='".$_GET['bcatid']."'";
} else if(isset($_GET['bid'])){
	$condition .=" AND id='".$_GET['bid']."'";
}
//seraching
if($_POST['searchbutton']=="Search"){
	$condition .=" AND btitle like '%".$_POST['searchtext']."%'";
}

$selblog="select * from blog ".$condition." order by id DESC";
$exeblog=mysqli_query($link, $selblog) or die("bloglatest selection failed");
$totrecord=mysqli_num_rows($exeblog);

$sel="select * from blogcategory";
$exe=mysqli_query($link, $sel) or die("Query failed");

$slblog="select * from blog order by id desc limit 0,1";
$elblog=mysqli_query($link, $slblog); 
$flblog=mysqli_fetch_array($elblog, MYSQLI_ASSOC);
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
				<h2 class="h3slider">Blog Posts</h2>
				<p>Mauris convallis dignissim tellus id facilisis. Phasellus ac nibh sed mauris vulputate hendrerit. Fusce rhoncus ipsum ut diam semper tempor. Donec ipsum tortor, cursus in porta nec, euismod id magna.
			</div>	<!--/galleryslider-->








			<div class="midblog"> <!--midblog-->
        	
				<div class="blogleft">			<!--blogleft-->

					<?php 
					if($totrecord>0)
					{
						while($fetchblog=mysqli_fetch_array($exeblog, MYSQLI_ASSOC))
						{
							$selbcat="select * from blogcategory where id='". $fetchblog['bcategory']."' ";
							$exebcat=mysqli_query($link,$selbcat) or die("bcategory not found");
							$fetchbcat=mysqli_fetch_array($exebcat,MYSQLI_ASSOC);
							?>
		        			<div class="midblogboxleft">	
			        			<div class="midblogleft">
			        				<div class="p1">Posted in: <?php echo $fetchbcat['bcategory']; ?> | Date: <?php echo $fetchblog['date']; ?></div>
			        				<div class="p2"><?php echo $fetchblog['btitle']; ?></div>
			        				<div class="borderblogimg"><img src="blog_image/<?php echo $fetchblog['bimg']; ?>" width="100%" height="25%"></div>
			        				<div class="p3">
			        					<p><?php echo $fetchblog['bsummary']; ?></p>
			        				</div>
			        				<div class="p4">More</div>
			        			</div>
		        			</div>	        		
		        			<?php
						}
					}else{		
						echo "<div align='center'><h2> Sorry there are no record in this category </h2></div>";
	        		}
					?>

	       		</div>			<!--/blogleft-->
        	
				
				<div class="blogright"> 			<!--blogright-->
	        			<div class="midblogright">
	    					<div class="blogrhead">Categories</div>
	    					<div class="blogp">

	    					<?php 
							while($fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC))
							{

							?>



								<a href="blog.php?bcatid=<?php echo $fetch['id']; ?>"> <p> <?php echo $fetch['bcategory']; ?> </p> </a> 
							<?php
							}
							?>

	    					</div>
	    					<a href="blog.php?pid=4"><div class="p4" > View All</div> </a>
	    					<div class="blogrhead2">Our Latest Blog</div>
	    					<div class="blogrimg">
	    						<img src="blog_image/<?php echo $flblog['bimg']; ?>" width="100%" height="100%">
	    					</div>
	    					<div class="p9">
	    						<p class=""><?php echo $flblog['bsummary'] ?><a href="#"> <golden>More...</golden></a>
	    					</div>
       		 			</div>
        			</div>			<!--/blogright-->
        			<div style="clear:both;"></div>
	        	</div> <!--/midblog-->
			


			<?php include "footer.php"; ?>
		</div>	<!--/outer-->
	</body>
</html>