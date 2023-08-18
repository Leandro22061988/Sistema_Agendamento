<?php require_once('php/controle.php') ?>

<?php 



$p = $_POST['prazo'];



	$sqlc = "INSERT INTO prazo_pontos (prazo) VALUES ('".$p."')";
	if($sql->query($sqlc) == true){
		header("location:../../fid_prazo_expira_cad.php?cad=ok");
	}else{
		header("location:../../fid_prazo_expira_cad.php?erro=cad");
	}
   
	
?>