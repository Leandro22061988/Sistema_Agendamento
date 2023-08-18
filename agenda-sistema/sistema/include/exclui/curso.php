<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM curso WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../cursos.php?exclui=ok");
	  }else{
		  header("location:../../cursos.php?error=excluir");
	  }

	
?>