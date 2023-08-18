<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM funcionario WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../funcionarios.php?exclui=ok");
	  }else{
		  header("location:../../funcionarios.php?error=excluir");
	  }

	
?>