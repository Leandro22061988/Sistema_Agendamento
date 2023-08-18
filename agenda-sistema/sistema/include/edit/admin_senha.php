<?php require_once('php/controle.php') ?>
<?php 

$s = md5($_POST['senha']);
$id = $_POST['id'];


	$sqlc = "UPDATE master SET senha='$s' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../admin_dados.php?id=$id");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../cliente_detalhes.php");
	}
   
	
?>