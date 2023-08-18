<?php require_once('php/controle.php') ?>

<?php 
$s = md5($_POST['senha']);
$id = $_POST['id'];


	$sqlc = "UPDATE cliente SET senha='$s' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../cliente_detalhes.php?id=$id");
	}else{
		header("location:../../cliente_detalhes.php");
	}

   
	
?>