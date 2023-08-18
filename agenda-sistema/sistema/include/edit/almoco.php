<?php require_once('php/controle.php') ?>
<?php 


$n = $_POST['nome'];
$h = $_POST['horario'];
$t = $_POST['tempo'];
$id = $_POST["id"];


	$sqlc = "UPDATE almoco SET nome='$n', horario='$h', tempo='$t' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../almoco.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>