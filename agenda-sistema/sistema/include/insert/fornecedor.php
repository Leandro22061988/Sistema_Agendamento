<?php require_once('php/controle.php') ?>

<?php 


$nome = $_POST['nome'];
$doc = $_POST['cpf_cnpj'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$ema = $_POST['email'];
$site = $_POST['site'];
$end = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$est = $_POST['estado'];


	$sqlc = "INSERT INTO fornecedor (nome, cpf_cnpj, telefone, celular, email, site, endereco, bairro, municipio, estado) VALUES ('".$nome."', '".$doc."', '".$tel."', '".$cel."',  '".$ema."', '".$site."', '".$end."', '".$b."', '".$m."', '".$est."')";
	if($sql->query($sqlc) == true){
		header("location:../../fornecedores.php?cad=ok");
	}else{
		header("location:../../fornecedores.php?erro=cad");
	}
   
	
?>