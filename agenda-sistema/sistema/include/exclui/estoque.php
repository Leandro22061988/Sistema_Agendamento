<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM estoque WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../estoque.php?exclui=ok");
	  }else{
		  echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		  //header("location:../../agenda.php?error=excluir");
	  }

	
?>