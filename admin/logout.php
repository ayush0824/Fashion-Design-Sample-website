<?php
	 session_start();
	 unset($_SESSION['sun_user']);
	 echo'<script> window.location="index.php" </script>';
?>