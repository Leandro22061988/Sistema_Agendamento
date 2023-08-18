<?php require_once('php/controle.php') ?>
<?php 


	
	$rg = $_GET["rg"];
	$id = $_GET["id"];

	  $delete = "DELETE FROM agenda WHERE id=$rg";

	  if($exc = $sql->query($delete)){
		  header("location:../../agenda_func.php?id=$id&exclui=ok");
	  }else{
		  header("location:../../agenda_func.php?error=excluir");
	  }

	
?>