<?php 
	define('HOSTNAME','localhost');
	define('USERNAME','jcinfbr_agenda');
	define('PASSWORD', 'Pag@2015');
	define('DATABASE', 'jcinfbr_agenda');
	define('CHARSET','utf8');

		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_error());
		mysqli_set_charset($sql, CHARSET) or die(mysqli_error($sql));
		
		return($sql);
	

?>