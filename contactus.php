<?php
include("config/connection.php");

if($_POST['submit']=="Submit")            //insert query
{
	$ins="insert into enquiry set cperson='".$_POST['cperson']."', contactno='".$_POST['contactno']."',email='".$_POST['email']."', caddress='".$_POST['caddress']."', cmessage='".$_POST['cmessage']."' "; 
	mysqli_query($link, $ins) or die("Query Failed");
}

$sel="select * from contactus where id=1";                //select query
$exe=mysqli_query($link, $sel) or die("Query failed");
$fetch=mysqli_fetch_array($exe, MYSQLI_ASSOC);

?>



<html>
	<head>
		<title>Sunflower</title>
		<link href="css/style.css" rel="stylesheet">
		<script src="js/fvalidation.js"></script>
	</head>
	<body>
		<div class="outer">	<!--outer-->
			<?php
				include "header.php";
				include "menubar.php";
			?>
			<div class="galleryslider">	<!--galleryslider-->
				<h2 class="h3slider">Contact Information</h2>
				<p>Suspendisse faucibus felis ut justo hendrerit at porttitor dolor aliquet. Pellentesque iaculis aliquam mi sit amet rhoncus. Proin aliquet aliquam tincidunt. Validate <a href="#">XHTML</a> and <a href="#">CSS.</a>
			</div>	<!--/galleryslider-->
			<div class="midcontact">	<!--midcontact-->
				<div class="midcontactleft">
					<div class="c1">Send a message</div>
					<form method="post" onSubmit="onfill()">
						<div class="c">Name <br> <input type="text" name="cperson" placeholder="Enter your name" class="input" value="" id="uname"><sup><star>*</star></sup></div>
				        <div class="c">Contact No. <br> <input type="text" name="contactno" placeholder="Contact Number" class="input" id="upno"><sup><star>*</star></sup></div>
				        <div class="c">E-mail <br> <input type="text" name="email" placeholder="E-mail" class="input" id="uemail"><sup><star>*</star></sup></div>
				        <div class="c">Address <br> <textarea name="caddress" placeholder="Enter Your Address" class="textarea"></textarea></div>
				        <div class="c">Message <br> <textarea name="cmessage" placeholder="Enter Your Message" class="textarea" id="umsg"></textarea><star>*</star></div>
			            <div><input type="submit" name="submit" value="Submit" class="button" onClick="return val()"><input type="reset" name="reset" value="Reset" class="button"> </div>
					</form>
				</div>
				<div class="midcontactright">
					<div class="c1">Our Location</div>
					<div class="midcontactrightimg"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114487.29623093923!2d72.96033078448058!3d26.27048961318549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c4eaa06ccb9%3A0x8114ea5b0ae1abb8!2sJodhpur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1482399655550" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
					<div class="c2">Our Address</div>
					<div class="c3"><?php echo $fetch['cperson']; ?></div>
					<div class="c4">
						<p><?php echo $fetch['address']; ?>, <?php echo $fetch['pincode']; ?></p>
					</div>
					<div class="c5">
						<p><b>Email:</b> <?php echo $fetch['email']; ?>
						<p><b>Mobile No.:</b> <?php echo $fetch['mnumber']; ?> 
					</div>
				</div>
				<div style="clear: both;"></div>
			</div>	<!--/midcontact-->
			
			<?php include "footer.php"; ?>
		</div>	<!--/outer-->
	</body>
</html>