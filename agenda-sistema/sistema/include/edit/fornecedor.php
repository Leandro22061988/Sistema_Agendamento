<?php require_once('php/controle.php') ?>
<?php 


$n = $_POST['nome'];
$doc = $_POST['cpf_cnpj'];
$t = $_POST['telefone'];
$c = $_POST['celular'];
$ema = $_POST['email'];
$site = $_POST['site'];
$end = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$est = $_POST['estado'];
$id = $_POST["id"];

	$sqlc = "UPDATE fornecedor SET nome='$n', cpf_cnpj='$doc', telefone='$t', celular='$c', email='$ema', site='$site', endereco='$end', bairro='$b', municipio='$m', estado='$est' WHERE id=$id ";
	if($sql->query($sqlc) === true){
		header("location:../../fornecedor_detalhes.php?id=$id");
	}else{
		header("location:../../fornecedor_detalhes.php");
	}
   
	
?>