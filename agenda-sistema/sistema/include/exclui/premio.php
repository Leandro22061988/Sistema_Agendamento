<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM premio WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../fid_premio.php?exclui=ok");
	  }else{
		  header("location:../../fid_premio.php?error=excluir");
	  }

	
?>