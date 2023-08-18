<?php require_once('php/controle.php') ?>
<?php 


	
	$id = $_GET["id"];
	$s = $_GET["n"];
	$p = 0;

	  $delete = "DELETE FROM fidelidade WHERE id=$id";

	  if($exc = $sql->query($delete)){
		  
			$sqlc = "UPDATE agenda SET pontos='$p' WHERE servico='$s' ";
			if($sql->query($sqlc) === true){
				header("location:../../fidelidade.php?edit=ok");
			}else{
				header("location:../../fidelidade.php?erro=edit");
			}
	  }else{
		  header("location:../../fidelidade.php?error=excluir");
	  }

	
?>