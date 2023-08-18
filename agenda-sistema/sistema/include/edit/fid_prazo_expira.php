<?php require_once('php/controle.php') ?>
<?php 


$p = $_POST['prazo'];
$id = $_POST["id"];


	
	
		$sqlc = "UPDATE prazo_pontos SET prazo='$p' WHERE id='$id'";
		if($sql->query($sqlc) === true){
			header("location:../../fid_prazo_expira_cad.php?edit=ok");
		}else{
			header("location:../../fid_prazo_expira_cad.php?aps=r");
		}
  
?>