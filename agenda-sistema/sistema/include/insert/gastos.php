<?php require_once('php/controle.php') ?>

<?php 


$de = $_POST['descricao'];
$v = str_replace(",",".",$_POST['valor']);
$d = $_POST['dia'];
$m = $_POST['mes'];
$a = $_POST['ano'];



	$sqlc = "INSERT INTO gastos (descricao, valor, dia, mes, ano) VALUES ('".$de."', '".$v."', '".$d."', '".$m."', '".$a."')";
	if($sql->query($sqlc) == true){
		header("location:../../gastos.php?cad=ok");
	}else{
		header("location:../../gastos.php?erro=cad");
	}
   
	
?>