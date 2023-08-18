<?php require_once('php/controle.php') ?>
<?php 


$s = $_POST['serv'];
$p = $_POST['ponto'];
$id = $_POST["id"];


	$sqlc = "UPDATE premio SET premio='$s', pontos='$p' WHERE id='$id' ";
	if($sql->query($sqlc) === true){
		header("location:../../fid_premio.php?edit=ok");
	}else{
		header("location:../../fid_premio.php?erro=edit");
	}
   
	
?>