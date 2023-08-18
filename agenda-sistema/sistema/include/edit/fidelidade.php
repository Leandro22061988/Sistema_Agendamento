<?php require_once('php/controle.php') ?>
<?php 


$s = $_POST['serv'];
$p = $_POST['pontos'];
$id = $_POST["id"];


	$sqlc = "UPDATE fidelidade SET servico='$s', pontos='$p' WHERE id='$id' ";
	if($sql->query($sqlc) === true){
		header("location:../../fidelidade.php?edit=ok");
	}else{
		header("location:../../fidelidade.php?erro=edit");
	}
   
	
?>