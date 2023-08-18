<?php 

session_start();

	if($_GET['token'] === md5(session_id())){
		
		session_destroy();
		header("location:../../login.php?logout=ok");
		exit();
		
	}
?>