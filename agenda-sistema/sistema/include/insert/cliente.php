<?php require_once('php/controle.php') ?>

<?php 


$nome = $_POST['nome'];
$ema = $_POST['email'];
$tel = $_POST['telefone'];
$cel = $_POST['celular'];
$end = $_POST['endereco'];
$b = $_POST['bairro'];
$m = $_POST['municipio'];
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];
$s = md5($_POST['senha']);


	$sqlc = "INSERT INTO cliente (nome, email, telefone, celular, endereco, bairro, municipio, dia, mes, ano, senha) VALUES ('".$nome."', '".$ema."', '".$tel."', '".$cel."',  '".$end."', '".$b."', '".$m."', '".$dia."', '".$mes."', '".$ano."', '".$s."')";
	if($sql->query($sqlc) == true){
		header("location:../../cliente.php?cad=ok");
	}else{
		header("location:../../cliente.php?erro=cad");
	}
   
	
?>