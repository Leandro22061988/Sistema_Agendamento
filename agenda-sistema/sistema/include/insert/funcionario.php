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
$func = $_POST['funcao'];
$sal = $_POST['salario'];
$porc = $_POST['porcentagem'];
$login = $_POST['login'];
$senha = $_POST['senha'];


	$sqlc = "INSERT INTO funcionario (nome, email, telefone, celular, endereco, bairro, municipio, dia, mes, ano, funcao, salario, porcentagem, login, senha) VALUES ('".$nome."', '".$ema."', '".$tel."', '".$cel."',  '".$end."', '".$b."', '".$m."', '".$dia."', '".$mes."', '".$ano."', '".$func."', '".$sal."', '".$porc."', '".$login."', '".$senha."')";
	if($sql->query($sqlc) == true){
		header("location:../../funcionarios.php?cad=ok");
	}else{
		header("location:../../funcionarios.php?erro=cad");
	}
   
	
?>