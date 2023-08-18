<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM contrato WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../contratos.php?exclui=ok");
	  }else{
		  header("location:../../contratos.php?error=excluir");
	  }

	
?>