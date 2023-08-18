<?php require_once('php/controle.php') ?>

<?php 


$n = $_POST['emailm'];
$h = $_POST['email'];
$t = $_POST['tempo'];



	$sqlc = "INSERT INTO agenda_verifica (email_serv ,email_rec, tempo) VALUES ('".$n."', '".$h."', '".$t."')";
	if($sql->query($sqlc) == true){
		header("location:../../agenda_configura.php?cad=ok");
	}else{
		header("location:../../agenda_configura.php?erro=cad");
	}
   
	
?>