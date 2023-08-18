<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];

	  $delete = "DELETE FROM adesao_curso WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  header("location:../../financeiro.php?exclui=ok");
	  }else{
		  echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		  //header("location:../../cliente.php?error=excluir");
	  }

	
?>