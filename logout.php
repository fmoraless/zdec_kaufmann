<?php
	session_start();
	unset ($SESSION['username']);
	session_destroy();
	 
	header('Location: http://localhost:8080/zdec_kaufmann/index.php');
	 
?>
