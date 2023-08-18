<?php 
	define('HOSTNAME','localhost');
	define('USERNAME','root');
	define('PASSWORD', null);
	define('CHARSET','utf8');

		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD) or die(mysqli_error());
		mysqli_set_charset($sql, CHARSET) or die(mysqli_error($sql));

	$conn = "CREATE DATABASE rodolace_salao";
	if($sql->query($conn)){
		
		header("location:config_tab.php");
		
	}else{
		mysqli_error($sql);
	}

?>