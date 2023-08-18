<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM aluno WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../cliente_c.php?exclui=ok");
	  }else{
		  header("location:../../cliente_c.php?error=excluir");
	  }

	
?>