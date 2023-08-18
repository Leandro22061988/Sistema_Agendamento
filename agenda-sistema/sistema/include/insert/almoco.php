<?php require_once('php/controle.php') ?>

<?php 


$n = $_POST['nome'];
$h = $_POST['hora'];
$t = $_POST['tempo'];
$i = $_POST['id_func'];



	$sqlc = "INSERT INTO almoco (nome, horario, tempo, id_pro) VALUES ('".$n."', '".$h."', '".$t."', '".$i."')";
	if($sql->query($sqlc) == true){
		header("location:../../almoco.php?cad=ok");
	}else{
		header("location:../../almoco.php?erro=cad");
	}
   
	
?>