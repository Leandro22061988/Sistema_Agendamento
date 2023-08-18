<?php 
	define('HOSTNAME','localhost');
	define('USERNAME','root');
	define('PASSWORD', null);
	define('DATABASE', 'rodolace_salao');
	define('CHARSET','utf8');

		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_error());
		mysqli_set_charset($sql, CHARSET) or die(mysqli_error($sql));
		
		$tab = "ALTER TABLE checkout ADD compras decimal(11,2) AFTER gastos";
		
	if($sql->query($tab)){
		header("location:index.php?col=ok");		
	}else{		
		mysqli_error($sql);
	}


?>