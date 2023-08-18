<?php require_once('php/controle.php') ?>

<?php 


$s = $_POST['serv'];
$p = $_POST['pontos'];



	$sqlc = "INSERT INTO fidelidade (servico, pontos) VALUES ('".$s."', '".$p."')";
	if($sql->query($sqlc) == true){
		header("location:../../fidelidade_list.php?cad=ok");
	}else{
		header("location:../../fidelidade_list.php?erro=cad");
	}
   
	
?>