<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM fornecedor WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../fornecedores.php?exclui=ok");
	  }else{
		  header("location:../../fornecedores.php?error=excluir");
	  }

	
?>