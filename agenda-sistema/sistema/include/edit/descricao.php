<?php require_once('php/controle.php') ?>

<?php 
	
$de = $_POST["desc"];
$id = $_POST["id"];

$id_p = $_POST["id_p"];


	$sqlc = "UPDATE agenda SET descricao='$de' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../agenda_func.php?id=$id_p");
	}else{
		//header("location:../../index.php?erro=edit");
		echo mysqli_error($sql);
	}
   
	
?>