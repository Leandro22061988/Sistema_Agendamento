<?php require_once('php/controle.php') ?>
<?php 


$l = $_POST['login'];
$s = $_POST['senha'];
$id = $_POST['id'];


	$sqlc = "UPDATE funcionario SET login='$l', senha='$s' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../funcionario_detalhes.php?id=$id");
	}else{
		header("location:../../funcionario_detalhes.php");
	}
   
	
?>