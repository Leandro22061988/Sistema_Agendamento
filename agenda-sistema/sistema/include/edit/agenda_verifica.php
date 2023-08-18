<?php require_once('php/controle.php') ?>
<?php 


$n = $_POST['emailm'];
$h = $_POST['email'];
$t = $_POST['tempo'];
$id = $_POST["id"];


	$sqlc = "UPDATE agenda_verifica SET email_serv='$n', email_rec='$h', tempo='$t' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../agenda_configura.php?edit=ok");
	}else{
		echo "<strong>DETALHES DO ERRO</strong>: " .mysqli_error($sql)."<br/><strong>Comunique ao Administrado!</strong>";
		//header("location:../../caixa.php?erro=edit");
	}
   
	
?>