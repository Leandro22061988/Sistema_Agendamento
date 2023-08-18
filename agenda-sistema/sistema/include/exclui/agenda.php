<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM agenda WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../agenda.php?exclui=ok");
	  }else{
		  header("location:../../agenda.php?error=excluir");
	  }

	
?>