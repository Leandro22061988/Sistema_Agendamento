<?php 
	define('HOSTNAME','localhost');
	define('USERNAME','root');
	define('PASSWORD', null);
	define('DATABASE', 'rodolace_salao');
	define('CHARSET','utf8');

		$sql = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_error());
		mysqli_set_charset($sql, CHARSET) or die(mysqli_error($sql));
		
		$tab = "ALTER TABLE estoque ADD valor_uni decimal(11,2) AFTER quantidade";
		$tab1 = "ALTER TABLE estoque ADD dia int(11)";
		$tab2 = "ALTER TABLE estoque ADD mes int(11)";
		$tab3 = "ALTER TABLE estoque ADD ano int(11)";
		
	if($sql->query($tab)){
		if($sql->query($tab1)){
			if($sql->query($tab2)){
				header("location:index.php?col=ok");
			}
			}
	}else{		
		mysqli_error($sql);
	}


?>