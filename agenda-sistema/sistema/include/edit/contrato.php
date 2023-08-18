<?php require_once('php/controle.php') ?>
<?php 


$cont = $_POST['contrato'];
$curs = $_POST['curso'];
$id = $_POST["id"];


	$sqlc = "UPDATE contrato SET contrato='$cont', curso='$curs' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../contratos.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>