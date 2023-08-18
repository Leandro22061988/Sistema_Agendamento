<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM cliente WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../cliente.php?exclui=ok");
	  }else{
		  header("location:../../cliente.php?error=excluir");
	  }

	
?>