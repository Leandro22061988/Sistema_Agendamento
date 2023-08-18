<?php 
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');					
//echo strftime('%A, %d de %B de %Y', strtotime('today'));

	$d = date("d");
	$m = date("m");
	$a = date("Y");
	$sta = "Aberto";
	$busc = "SELECT * FROM checkout WHERE status='$sta' ORDER BY id DESC";
	$excut = $sql->query($busc);
	$ver = mysqli_fetch_assoc($excut);
	
	$s = $ver["status"];
	$dd = $ver["dia"];
	$mm = $ver["mes"];
	$aa = $ver["ano"];
	
?>

