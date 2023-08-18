<?php require_once('php/controle.php') ?>
<?php 


$de = $_POST['descricao'];
$v = str_replace(",",".",$_POST['valor']);
$d = $_POST['dia'];
$m = $_POST['mes'];
$a = $_POST['ano'];
$id = $_POST["id"];


	$sqlc = "UPDATE gastos SET descricao='$de', valor='$v', dia='$d', mes='$m', ano='$a' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../gastos.php?edit=ok");
	}else{
		header("location:../../gastos.php?erro=edit");
	}
   
	
?>