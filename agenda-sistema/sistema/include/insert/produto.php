<?php require_once('php/controle.php') ?>

<?php 

$cod = $_POST['codigo'];
$nome = $_POST['nome'];
$qt = $_POST['quant'];
$cus = $_POST['custo'];
$desc = $_POST['descricao'];
$val = $_POST['valor'];
$porc = $_POST["porcent"];




	$sqlc = "INSERT INTO produto (codigo, nome, quantidade, custo, descricao, valor, porcentagem) VALUES ('".$cod."', '".$nome."', '".$qt."', '".$cus."', '".$desc."', '".$val."', '".$porc."')";
	if($sql->query($sqlc) == true){
		header("location:../../produto.php?cad=ok");
	}else{
		header("location:../../produto.php?erro=cad");
	}
   
	
?>