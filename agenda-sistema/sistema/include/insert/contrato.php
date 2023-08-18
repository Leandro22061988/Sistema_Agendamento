<?php require_once('php/controle.php') ?>

<?php 


$cont = $_POST['contrato'];
$curs = $_POST['curso'];



	$sqlc = "INSERT INTO contrato (contrato, curso) VALUES ('".$cont."', '".$curs."')";
	if($sql->query($sqlc) == true){
		header("location:../../contratos.php?cad=ok");
	}else{
		header("location:../../contratos.php?erro=cad");
	}
   
	
?>